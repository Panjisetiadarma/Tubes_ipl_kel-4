<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_id')->constrained('rental_contracts')->onDelete('cascade');
            $table->string('invoice_code', 50)->unique();
            $table->unsignedTinyInteger('period_month');
            $table->year('period_year');
            $table->decimal('amount_due', 12, 2);
            $table->date('due_date');
            $table->enum('status', ['Belum Lunas', 'Menunggu Verifikasi', 'Lunas'])->default('Belum Lunas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
