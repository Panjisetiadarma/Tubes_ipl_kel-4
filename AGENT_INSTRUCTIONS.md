# 🤖 AGENT_INSTRUCTIONS.md — Context & Guardrails for AI Coding Agents

> **ATTENTION AI AGENTS (Cursor, GitHub Copilot, Windsurf, Claude Code, Cline, Aider, Hermes, etc.):**  
> Read this document completely BEFORE proposing, generating, or modifying any code in this repository.  
> You must strictly adhere to the project scope, business requirements, and architectural design specified in the **SRS** (*Software Requirements Specification*) and **SDD** (*Software Design Description*) of **KostPay**.

---

## 🎯 1. Project Overview & Primary Goals

* **Project Name**: **KostPay** (Tubes Implementasi Perangkat Lunak - Kelompok 4)
* **Application Domain**: Sistem Informasi Manajemen dan Pembayaran Kost Pondok Khasanah berbasis Web.
* **Core Problem Statement**: 
  1. Pengelolaan data kamar, penghuni, dan kontrak sewa yang sebelumnya manual / tersebar.
  2. Pencatatan transaksi tagihan sewa bulanan dan pembayaran yang belum terintegrasi.
  3. Pelaporan keluhan fasilitas kamar oleh penghuni yang sering terabaikan.
* **Primary Objective**: Menyediakan platform terpusat bagi **Pemilik Kost (Admin)** dan **Penghuni Kost (Tenant)** untuk mengelola siklus sewa, pembayaran tagihan, dan tiket keluhan fasilitas secara transparan dan terotomatisasi.

---

## 👥 2. User Roles & Access Control (RBAC)

Aplikasi memiliki **2 Aktor Utama** dengan hak akses yang terpisah tegas:

1. **Pemilik Kost (Admin)**:
   * Mengelola kamar kost (CRUD data kamar, tipe kamar, tarif sewa, status ketersediaan).
   * Mengelola kontrak sewa penghuni (durasi sewa, tanggal mulai & jatuh tempo).
   * Menerbitkan dan memvalidasi tagihan (*invoices*) serta memverifikasi bukti pembayaran.
   * Mengelola tiket keluhan (*complaints*) dari penghuni (update status: *Pending*, *In Progress*, *Resolved*).
   * Melihat dashboard rekapitulasi keuangan dan laporan okupansi kamar.

2. **Penghuni Kost (Tenant/User)**:
   * Melihat profil sewa dan detail kamar yang ditempati.
   * Melihat daftar tagihan sewa bulanan (*invoices*).
   * Mengunggah bukti pembayaran (*payment proof*).
   * Mengirimkan tiket keluhan perbaikan fasilitas kost (*complaint tickets*) dan memantau status perbaikannya.

---

## 🗄️ 3. Database Schema & Core Entities (Strict SDD Alignment)

Pastikan semua migration, model Eloquent, dan relasi mematuhi skema berikut:

1. **`users`**:
   * `id`, `name`, `email` (unique), `password`, `phone_number`, `role` (enum: `admin`, `tenant`), `timestamps`.
2. **`rooms`**:
   * `id`, `room_number` (unique), `room_type` (enum/string: Standar, VIP, VVIP), `monthly_price`, `status` (enum: `Tersedia`, `Terisi`, `Perbaikan`), `facilities` (text), `timestamps`.
3. **`rental_contracts`**:
   * `id`, `user_id` (foreign key -> `users.id`), `room_id` (foreign key -> `rooms.id`), `start_date`, `end_date`, `deposit_amount`, `status` (enum: `Aktif`, `Selesai`, `Dibatalkan`), `timestamps`.
4. **`invoices`**:
   * `id`, `contract_id` (foreign key -> `rental_contracts.id`), `invoice_code` (unique), `period_month`, `period_year`, `amount_due`, `due_date`, `status` (enum: `Belum Lunas`, `Menunggu Verifikasi`, `Lunas`), `timestamps`.
5. **`payments`**:
   * `id`, `invoice_id` (foreign key -> `invoices.id`), `payment_date`, `payment_method` (Transfer Bank, Kas/Tunai), `proof_file` (string path), `verified_by` (foreign key -> `users.id`, nullable), `timestamps`.
6. **`complaints`**:
   * `id`, `user_id` (foreign key -> `users.id`), `room_id` (foreign key -> `rooms.id`), `title`, `description`, `photo_path` (nullable), `status` (enum: `Diajukan`, `Diproses`, `Selesai`), `timestamps`.

---

## 🚫 4. Strict Guardrails & Anti-Goals (DO NOT DO)

* ❌ **DO NOT** turn this project into an e-commerce platform, marketplace, hotel booking system, or general social network.
* ❌ **DO NOT** install unnecessary heavyweight third-party libraries without necessity.
* ❌ **DO NOT** use complex microservices architecture. This is a monolithic MVC Laravel web application.
* ❌ **DO NOT** hardcode raw SQL queries in controllers. Always leverage **Eloquent ORM** and Laravel standard Query Builder.
* ❌ **DO NOT** expose sensitive credentials (passwords, tokens, mailer secrets) in git. Always read from `.env`.

---

## 🛠️ 5. Technology Stack & Coding Standards

* **Framework**: Laravel 11 / 13 (PHP 8.2+)
* **Database**: MySQL (XAMPP local)
* **Frontend**: Blade Templates + Bootstrap / Tailwind CSS
* **Architecture Pattern**: Model-View-Controller (MVC)
* **Naming Conventions**:
  * Controllers: `ResourceController` (e.g., `RoomController`, `InvoiceController`).
  * Models: Singular PascalCase (e.g., `Room`, `RentalContract`, `Invoice`).
  * Migrations: Plural snake_case (e.g., `create_rental_contracts_table`).
  * Routes: RESTful resource naming with route grouping based on auth/role middleware.
