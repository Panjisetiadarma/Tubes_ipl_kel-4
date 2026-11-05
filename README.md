# 🚀 Tubes IPL Kelompok 4 — KostPay

**KostPay** adalah Web Application Sistem Informasi Manajemen dan Pembayaran Kost Pondok Khasanah yang dikembangkan untuk memenuhi Tugas Besar mata kuliah **Implementasi Perangkat Lunak (IPL)** - Program Studi Informatika, Universitas Jenderal Achmad Yani.

---

## 👥 Tim Pengembang (Kelompok 4)
* **Panji Setiadarma** (NIM: 2450081087)
* *Rekan Kelompok 4*

---

## 📖 Dokumentasi Penting Proyek
* 📘 **[Panduan Penggunaan Laravel Migration](PANDUAN_MIGRATION.md)** — Wajib dibaca sebelum memodifikasi skema tabel basis data.
* 🤖 **[Panduan & Guardrails untuk AI Coding Agent](AGENT_INSTRUCTIONS.md)** — Konteks bisnis, batasan fitur, dan panduan arsitektur (SRS & SDD) agar AI Agent (Cursor, Windsurf, Copilot, Cline, Claude Code) tidak halusinasi atau melenceng dari topik utama.

---

## 💻 Cara Menjalankan Proyek di Komputer Lokal

1. **Clone Repository**:
   ```bash
   git clone <url_repo>
   cd Tubes_ipl_kel-4
   ```

2. **Install Dependensi Composer** (jika clone fresh):
   ```bash
   composer install
   ```

3. **Setup Environment**:
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**:
   Nyalakan **MySQL** di XAMPP atau laragon, buat database baru bernama `kostpay_db`, lalu jalankan:
   ```bash
   php artisan migrate
   ```

5. **Jalankan Development Server**:
   ```bash
   php artisan serve
   ```
   Buka di peramban web: [http://127.0.0.1:8000](http://127.0.0.1:8000)
