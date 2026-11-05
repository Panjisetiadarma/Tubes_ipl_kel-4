# 📘 Panduan Penggunaan Laravel Migration — KostPay (Tubes IPL Kelompok 4)

Dokumen ini memuat panduan lengkap cara kerja, alur penggunaan, serta perintah-perintah penting `php artisan migrate` dalam proyek **KostPay (Sistem Manajemen & Pembayaran Kost Pondok Khasanah)**.

---

## 📌 1. Apa Itu Laravel Migration?

Migration adalah **version control untuk database**. Migration memungkinkan seluruh anggota tim memiliki struktur tabel basis data yang sama persis tanpa perlu mengekspor/mengimpor file `.sql` secara manual.

---

## ⚙️ 2. Persiapan Sebelum Menjalankan Migration

1. **Pastikan MySQL Aktif**: Buka **XAMPP Control Panel**, lalu klik **Start** pada modul **MySQL** (dan Apache jika diperlukan).
2. **Buat Database**: Buka `http://localhost/phpmyadmin`, buat database baru bernama:
   ```sql
   kostpay_db
   ```
3. **Cek Konfigurasi `.env`**:
   Buka file `.env` di root proyek, pastikan parameternya sesuai:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=kostpay_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

---

## 🛠️ 3. Perintah-Perintah Utama Migration

### A. Menjalankan Seluruh Migration Baru
Perintah ini akan mengeksekusi semua file migration yang belum pernah dijalankan sebelumnya:
```bash
php artisan migrate
```

### B. Membuat File Migration Baru
Gunakan format nama tabel jamak (*plural* snake_case):
```bash
# Membuat tabel baru
php artisan make:migration create_rooms_table

# Menambahkan kolom baru ke tabel yang sudah ada
php artisan make:migration add_photo_to_rooms_table --table=rooms
```

File migration baru akan terbuat di folder `database/migrations/`.

---

## 🔄 4. Mengatur Ulang / Reset Migration (PENTING!)

### A. Reset & Jalankan Ulang Semua Migration (Fresh)
Gunakan perintah ini saat kamu ingin menghapus seluruh tabel lama dan membangun ulang dari awal:
```bash
php artisan migrate:fresh
```

### B. Fresh Sekaligus Menjalankan Data Awal (Seeder)
Sangat direkomendasikan saat baru clone repo atau reset database agar ada data uji/dummy:
```bash
php artisan migrate:fresh --seed
```

### C. Membatalkan Batch Migration Terakhir (Rollback)
Jika migration terakhir kamu ada kesalahan:
```bash
# Membatalkan 1 batch terakhir
php artisan migrate:rollback

# Membatalkan 2 batch terakhir
php artisan migrate:rollback --step=2
```

### D. Melihat Status Migration
Untuk melihat migration mana saja yang sudah dijalankan (`Ran`) atau belum (`Pending`):
```bash
php artisan migrate:status
```

---

## 🏗️ 5. Anatomi File Migration

Setiap file migration memiliki 2 fungsi utama:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Dieksekusi saat 'php artisan migrate' dijalankan
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number', 10)->unique();
            $table->enum('room_type', ['Standar', 'VIP', 'VVIP']);
            $table->decimal('monthly_price', 12, 2);
            $table->enum('status', ['Tersedia', 'Terisi', 'Perbaikan'])->default('Tersedia');
            $table->text('facilities')->nullable();
            $table->timestamps();
        });
    }

    // Dieksekusi saat 'php artisan migrate:rollback' dijalankan
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
```

---

## ⚠️ 6. Aturan Kerja Kelompok Terkait Migration

1. **JANGAN PERNAH** mengedit file migration lama yang sudah di-commit dan dijalankan oleh anggota tim lain. Buatlah migration baru dengan `php artisan make:migration add_..._to_..._table`.
2. **Selalu buat foreign key onDelete cascade / restrict yang jelas** agar integritas relasi antar tabel tetap terjaga.
3. Setelah membuat migration baru, selalu uji dulu dengan `php artisan migrate:fresh` di komputer lokalmu sebelum melakukan `git push` ke repository kelompok.
