<?php

namespace Database\Seeders;

use App\Models\Complaint;
use App\Models\Invoice;
use App\Models\RentalContract;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with sample koStay data.
     */
    public function run(): void
    {
        // 1. Akun Admin (Pengelola Kost)
        $admin = User::firstOrCreate(
            ['email' => 'admin@kostay.com'],
            [
                'name' => 'Admin koStay',
                'password' => Hash::make('password123'),
                'phone_number' => '081234567890',
                'role' => 'admin',
            ]
        );

        // 2. Akun Tenant (Penghuni Kost Contoh)
        $tenant1 = User::firstOrCreate(
            ['email' => 'panji@kostay.com'],
            [
                'name' => 'Panji Setiadarma',
                'password' => Hash::make('password123'),
                'phone_number' => '089876543210',
                'role' => 'tenant',
            ]
        );

        $tenant2 = User::firstOrCreate(
            ['email' => 'siti@kostay.com'],
            [
                'name' => 'Siti Rahma',
                'password' => Hash::make('password123'),
                'phone_number' => '087712345678',
                'role' => 'tenant',
            ]
        );

        // 3. Master Data Kamar Kost (20 Kamar Standar & 10 Kamar Eksklusif = Total 30 Kamar)
        // Pembeda utama: Tipe Eksklusif memiliki AC Inverter + Water Heater
        $rooms = [];

        // 20 Kamar Tipe Standar (A01 - A20) - Rp 1.550.000
        $standarOccupied = ['A03', 'A07', 'A12', 'A18']; // 4 Terisi
        $standarMaintenance = ['A15'];                    // 1 Perbaikan
        for ($i = 1; $i <= 20; $i++) {
            $num = 'A' . str_pad($i, 2, '0', STR_PAD_LEFT);
            $status = 'Tersedia';
            if (in_array($num, $standarOccupied)) {
                $status = 'Terisi';
            } elseif (in_array($num, $standarMaintenance)) {
                $status = 'Perbaikan';
            }

            $rooms[] = [
                'room_number' => $num,
                'room_type' => 'Standar',
                'monthly_price' => 1550000.00,
                'status' => $status,
                'facilities' => 'Kamar Mandi Dalam, Mini Dapur, Exhaust Blower, Kipas Angin Dinding, Kasur Springbed, Lemari Pakaian, Meja Belajar, WiFi 512 Mbps (Multi Access Point)',
            ];
        }

        // 10 Kamar Tipe Eksklusif (B01 - B10) - Rp 2.000.000 (AC Inverter + Water Heater)
        $eksklusifOccupied = ['B01', 'B04', 'B08']; // 3 Terisi (B01 ditempati Panji, B04 oleh Siti)
        $eksklusifMaintenance = ['B10'];            // 1 Perbaikan
        for ($j = 1; $j <= 10; $j++) {
            $num = 'B' . str_pad($j, 2, '0', STR_PAD_LEFT);
            $status = 'Tersedia';
            if (in_array($num, $eksklusifOccupied)) {
                $status = 'Terisi';
            } elseif (in_array($num, $eksklusifMaintenance)) {
                $status = 'Perbaikan';
            }

            $rooms[] = [
                'room_number' => $num,
                'room_type' => 'Eksklusif',
                'monthly_price' => 2000000.00,
                'status' => $status,
                'facilities' => 'AC Inverter, Water Heater, Kamar Mandi Dalam, Mini Dapur, Exhaust Blower, Kasur Queen Size, Lemari 2 Pintu, Meja Belajar, WiFi 512 Mbps (Multi Access Point)',
            ];
        }

        foreach ($rooms as $roomData) {
            Room::firstOrCreate(['room_number' => $roomData['room_number']], $roomData);
        }

        // 4. Kontrak Sewa Aktif
        $roomB01 = Room::where('room_number', 'B01')->first();
        if ($roomB01 && $tenant1) {
            $contract1 = RentalContract::firstOrCreate(
                [
                    'user_id' => $tenant1->id,
                    'room_id' => $roomB01->id,
                ],
                [
                    'start_date' => '2026-11-01',
                    'end_date' => '2027-10-31',
                    'deposit_amount' => 500000.00,
                    'status' => 'Aktif',
                ]
            );

            // 5. Tagihan Sewa Bulan Ini untuk Kontrak 1
            Invoice::firstOrCreate(
                ['invoice_code' => 'INV-202611-0001'],
                [
                    'contract_id' => $contract1->id,
                    'period_month' => 11,
                    'period_year' => 2026,
                    'amount_due' => 2000000.00,
                    'due_date' => '2026-11-10',
                    'status' => 'Belum Lunas',
                ]
            );

            // 6. Contoh Tiket Keluhan
            Complaint::firstOrCreate(
                [
                    'user_id' => $tenant1->id,
                    'room_id' => $roomB01->id,
                    'title' => 'Bohlam Lampu Kamar Mandi Padam',
                ],
                [
                    'description' => 'Bohlam lampu kamar mandi mati sejak kemarin malam. Mohon bantuannya untuk diganti.',
                    'photo_path' => null,
                    'status' => 'Diajukan',
                ]
            );
        }
    }
}
