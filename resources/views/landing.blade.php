<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koStay — Hunian Kost Modern, Nyaman & Terpercaya</title>
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        kostay: {
                            primary: '#EAA75D',      // Warm Golden Amber / Apricot
                            primaryHover: '#F2B570',
                            secondary: '#4E878C',    // Muted Teal
                            secondaryLight: '#72A4A8',
                            tertiary: '#FBE6CD',     // Soft Sand Cream
                            neutral: '#0D191B',      // Base Dark Background
                            surface: '#122124',      // Elevated Layer
                            card: '#16272B',         // Card Background
                            cardBorder: '#20363B',   // Card Border
                            subtext: '#9DB2B5',      // Soft Muted Text
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-dark {
            background: rgba(13, 25, 27, 0.88);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }
        .glow-accent {
            box-shadow: 0 0 40px -10px rgba(234, 167, 93, 0.25);
        }
    </style>
</head>
<body class="bg-kostay-neutral text-white font-sans antialiased selection:bg-kostay-primary selection:text-kostay-neutral">

    <!-- 1. NAVBAR (Glassmorphism Dark) -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-dark border-b border-kostay-cardBorder/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#beranda" class="flex items-center gap-3.5 group">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-kostay-primary to-amber-200 flex items-center justify-center text-kostay-neutral font-extrabold shadow-lg shadow-kostay-primary/20 group-hover:scale-105 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <div>
                    <span class="text-2xl font-extrabold tracking-tight text-white group-hover:text-kostay-tertiary transition-colors">koStay</span>
                    <span class="block text-[10px] font-bold text-kostay-secondary uppercase tracking-widest -mt-1">Modern Living</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-semibold text-kostay-subtext">
                <a href="#beranda" class="hover:text-kostay-tertiary transition-colors">Beranda</a>
                <a href="#fasilitas" class="hover:text-kostay-tertiary transition-colors">Fasilitas</a>
                <a href="#kamar" class="hover:text-kostay-tertiary transition-colors">Pilihan Kamar</a>
                <a href="#benefit" class="hover:text-kostay-tertiary transition-colors">Benefit</a>
                <a href="#faq" class="hover:text-kostay-tertiary transition-colors">FAQ</a>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3.5">
                <a href="#kamar" class="hidden sm:inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold text-kostay-subtext hover:text-white transition-colors">
                    Cek Kamar
                </a>
                <a href="{{ url('/login') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-extrabold bg-kostay-primary text-kostay-neutral hover:bg-kostay-primaryHover shadow-md shadow-kostay-primary/20 hover:shadow-lg hover:shadow-kostay-primary/30 transition-all">
                    <span>Masuk Portal</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="beranda" class="pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden relative">
        <!-- Ambient Glow Elements -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-kostay-secondary/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/3 right-10 w-96 h-96 bg-kostay-primary/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                <!-- Left Content -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Pill Tag -->
                    <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-kostay-surface border border-kostay-secondary/30 text-kostay-primary text-xs font-bold tracking-wider uppercase">
                        <span class="w-2 h-2 rounded-full bg-kostay-primary animate-pulse"></span>
                        Hunian Eksklusif & Nyaman Mahasiswa & Karyawan
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-[1.15] tracking-tight">
                        Kost Modern dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-kostay-primary to-kostay-tertiary">Fasilitas Lengkap</span> & Sistem Digital
                    </h1>

                    <p class="text-base sm:text-lg text-kostay-subtext leading-relaxed max-w-2xl">
                        Selamat datang di <strong class="text-kostay-tertiary">koStay</strong>. Rasakan pengalaman tinggal berkelas dengan kamar ber-AC & Kipas Angin, kamar mandi dalam dengan water heater, WiFi 512 Mbps Multi-AP, serta kemudahan pembayaran sewa dan aduan keluhan transparan berbasis web.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <a href="#kamar" class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full text-base font-extrabold bg-kostay-primary text-kostay-neutral hover:bg-kostay-primaryHover shadow-xl shadow-kostay-primary/25 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span>Eksplor Pilihan Kamar</span>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo%20Pengelola%20koStay,%20saya%20ingin%20tanya%20informasi%20ketersediaan%20kamar" target="_blank" class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full text-base font-bold bg-kostay-surface text-kostay-tertiary hover:text-white border border-kostay-secondary/40 hover:border-kostay-primary transition-all">
                            <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/>
                            </svg>
                            <span>Tanya via WhatsApp</span>
                        </a>
                    </div>

                    <!-- Highlight Badges -->
                    <div class="pt-6 border-t border-kostay-cardBorder grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div>
                            <span class="block text-2xl font-extrabold text-kostay-tertiary">100%</span>
                            <span class="text-xs text-kostay-subtext font-medium">Full Furnished</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-extrabold text-kostay-primary">512 Mbps</span>
                            <span class="text-xs text-kostay-subtext font-medium">Multi-AP Mesh</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-extrabold text-white">24 Jam</span>
                            <span class="text-xs text-kostay-subtext font-medium">CCTV & Akses Kunci</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-extrabold text-kostay-secondaryLight">Portal Web</span>
                            <span class="text-xs text-kostay-subtext font-medium">Invoice & Komplain</span>
                        </div>
                    </div>
                </div>

                <!-- Right Hero Image with Floating Glass Cards -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Main Image Frame with ambient border -->
                        <div class="rounded-3xl overflow-hidden shadow-2xl border-2 border-kostay-cardBorder/80 glow-accent">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=1200&q=80" alt="Kamar Kost Nyaman koStay" class="w-full h-[480px] object-cover hover:scale-105 transition-transform duration-700">
                        </div>

                        <!-- Floating Card 1: WiFi Speed -->
                        <div class="absolute -top-6 -left-6 bg-kostay-card/90 backdrop-blur-md p-4 rounded-2xl shadow-2xl border border-kostay-cardBorder flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-kostay-secondary/20 text-kostay-primary flex items-center justify-center font-bold">
                                📶
                            </div>
                            <div>
                                <p class="text-xs text-kostay-subtext font-medium">Koneksi Internet</p>
                                <p class="text-sm font-bold text-white">Fiber Optic 512 Mbps</p>
                            </div>
                        </div>

                        <!-- Floating Card 2: Security & Privacy -->
                        <div class="absolute -bottom-6 -right-6 bg-kostay-card/90 backdrop-blur-md p-4 rounded-2xl shadow-2xl border border-kostay-cardBorder flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-kostay-primary/20 text-kostay-primary flex items-center justify-center font-bold">
                                🔒
                            </div>
                            <div>
                                <p class="text-xs text-kostay-subtext font-medium">Privasi & Keamanan</p>
                                <p class="text-sm font-bold text-white">CCTV 24/7 & Akses Kunci</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. FASILITAS & BENEFIT LENGKAP -->
    <section id="fasilitas" class="py-24 bg-kostay-surface border-y border-kostay-cardBorder/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-kostay-primary bg-kostay-card px-4 py-1.5 rounded-full border border-kostay-cardBorder">
                    Kenyamanan Tanpa Kompromi
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-4 tracking-tight">
                    Fasilitas Lengkap untuk Kenyamanan Tinggal Anda
                </h2>
                <p class="text-kostay-subtext mt-4 text-base leading-relaxed">
                    Tidak perlu repot membawa perabotan berat. Di koStay, seluruh unit kamar dan area komunal dirancang agar Anda bisa langsung masuk dan beristirahat dengan tenang.
                </p>
            </div>

            <!-- Facilities Grid (6 Main Features) -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Facility 1: Prabot Lengkap -->
                <div class="p-8 rounded-3xl bg-kostay-card border border-kostay-cardBorder hover:border-kostay-secondary/60 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-kostay-surface border border-kostay-cardBorder text-kostay-primary flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🛏️
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-kostay-tertiary transition-colors">Full Furnished & Prabot Lengkap</h3>
                    <p class="text-sm text-kostay-subtext leading-relaxed">
                        Tiap kamar sudah dilengkapi kasur springbed nyaman (Single/Queen), bantal empuk, sprei bersih, lemari pakaian 2 pintu, serta meja dan kursi ergonomis untuk belajar atau WFH.
                    </p>
                </div>

                <!-- Facility 2: Kamar Mandi Dalam & Water Heater -->
                <div class="p-8 rounded-3xl bg-kostay-card border border-kostay-cardBorder hover:border-kostay-secondary/60 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-kostay-surface border border-kostay-cardBorder text-kostay-secondaryLight flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🚿
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-kostay-tertiary transition-colors">Kamar Mandi Dalam & Water Heater</h3>
                    <p class="text-sm text-kostay-subtext leading-relaxed">
                        Nikmati privasi maksimal dengan kamar mandi di dalam kamar yang bersih, kloset duduk modern, shower hemat air, dan pemanas air hangat otomatis untuk menyegarkan badan.
                    </p>
                </div>

                <!-- Facility 3: AC Inverter -->
                <div class="p-8 rounded-3xl bg-kostay-card border border-kostay-cardBorder hover:border-kostay-secondary/60 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-kostay-surface border border-kostay-cardBorder text-sky-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        ❄️
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-kostay-tertiary transition-colors">AC Inverter & Ventilasi Sejuk</h3>
                    <p class="text-sm text-kostay-subtext leading-relaxed">
                        Unit pendingin ruangan (AC) hemat energi yang dirawat berkala agar tetap dingin optimal, didukung jendela dengan sirkulasi cahaya alami yang sehat.
                    </p>
                </div>

                <!-- Facility 4: WiFi Cepat 512 Mbps -->
                <div class="p-8 rounded-3xl bg-kostay-card border border-kostay-cardBorder hover:border-kostay-secondary/60 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-kostay-surface border border-kostay-cardBorder text-emerald-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        ⚡
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-kostay-tertiary transition-colors">Internet WiFi Dedicated 512 Mbps</h3>
                    <p class="text-sm text-kostay-subtext leading-relaxed">
                        Akses internet fiber optic ultra-cepat 512 Mbps tersambung ke beberapa unit Access Point (Mesh Multi-AP) di setiap sudut koridor, memastikan seluruh kamar mendapat sinyal prima dan kecepatan merata tanpa blind spot.
                    </p>
                </div>

                <!-- Facility 5: Mini Dapur Pribadi -->
                <div class="p-8 rounded-3xl bg-kostay-card border border-kostay-cardBorder hover:border-kostay-secondary/60 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-kostay-surface border border-kostay-cardBorder text-amber-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🍳
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-kostay-tertiary transition-colors">Mini Dapur Pribadi & Sink Cuci</h3>
                    <p class="text-sm text-kostay-subtext leading-relaxed">
                        Tiap unit kamar dilengkapi mini dapur pribadi (*kitchenette*) dan wastafel cuci piring tersendiri, memudahkan Anda memasak hidangan favorit tanpa harus antre.
                    </p>
                </div>

                <!-- Facility 6: Exhaust Blower & Sirkulasi Segar -->
                <div class="p-8 rounded-3xl bg-kostay-card border border-kostay-cardBorder hover:border-kostay-secondary/60 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-kostay-surface border border-kostay-cardBorder text-teal-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        💨
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-kostay-tertiary transition-colors">Exhaust Blower & Udara Segar</h3>
                    <p class="text-sm text-kostay-subtext leading-relaxed">
                        Dilengkapi exhaust blower khusus sirkulasi udara aktif di setiap kamar, memastikan hawa ruangan tetap sejuk, higienis, dan bebas pengap sepanjang hari.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. PILIHAN TIPE KAMAR (DYNAMIC FROM DATABASE) -->
    <section id="kamar" class="py-24 bg-kostay-neutral">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-kostay-primary bg-kostay-card px-4 py-1.5 rounded-full border border-kostay-cardBorder">
                        Pilihan Unit Kamar
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-4 tracking-tight">
                        Tipe Kamar Sesuai Kebutuhan Anda
                    </h2>
                    <p class="text-kostay-subtext mt-2 text-base">
                        Data ketersediaan kamar di bawah ini terhubung langsung ke database sistem koStay secara *real-time*.
                    </p>
                </div>

                <!-- WhatsApp Booking Quick CTA -->
                <a href="https://wa.me/6281234567890?text=Halo%20Pengelola%20koStay,%20saya%20ingin%20jadwalkan%20survei%20lokasi%20kamar%20kost" target="_blank" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-bold bg-kostay-card text-kostay-tertiary hover:text-white border border-kostay-cardBorder hover:border-kostay-primary shadow-sm transition-all">
                    <span>Jadwalkan Survei Lokasi</span>
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>

            <!-- 2 Tipe Kamar Comparison Banner -->
            <div class="mb-12 grid md:grid-cols-2 gap-6">
                <!-- Tipe 1: Standar -->
                <div class="p-6 rounded-3xl bg-kostay-surface border border-kostay-cardBorder flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-kostay-card border border-kostay-cardBorder text-kostay-tertiary flex items-center justify-center text-xl shrink-0">
                        🌿
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="text-lg font-bold text-white">Tipe Standar</h3>
                            <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-slate-800 text-kostay-subtext border border-slate-700">Rp 1.550.000 / bln</span>
                        </div>
                        <p class="text-xs text-kostay-subtext mt-1 leading-relaxed">
                            Dilengkapi Kamar Mandi Dalam, Mini Dapur Pribadi, Exhaust Blower, Kipas Angin Dinding, Kasur Springbed, Meja & Lemari, serta WiFi 512 Mbps Multi-AP.
                        </p>
                    </div>
                </div>

                <!-- Tipe 2: Eksklusif -->
                <div class="p-6 rounded-3xl bg-kostay-surface border border-kostay-primary/40 flex items-start gap-4 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-kostay-primary/10 rounded-full blur-xl pointer-events-none"></div>
                    <div class="w-12 h-12 rounded-2xl bg-kostay-primary/20 text-kostay-primary flex items-center justify-center text-xl shrink-0 border border-kostay-primary/30">
                        ⭐
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="text-lg font-bold text-white">Tipe Eksklusif</h3>
                            <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-kostay-primary/20 text-kostay-primary border border-kostay-primary/30">Rp 2.000.000 / bln</span>
                        </div>
                        <p class="text-xs text-kostay-subtext mt-1 leading-relaxed">
                            Semua fasilitas Tipe Standar <strong class="text-kostay-tertiary">+ Unit AC Inverter sejuk & + Water Heater air hangat</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2 CARDS TAMPILAN KAMAR (STANDAR & EKSKLUSIF) -->
            <div class="grid md:grid-cols-2 gap-8 lg:gap-10">
                
                <!-- CARD 1: TIPE STANDAR (20 KAMAR) -->
                @php
                    $standarTotal = $standarRooms->count();
                    $standarKosong = $standarRooms->where('status', 'Tersedia')->count();
                    $standarTerisi = $standarRooms->where('status', 'Terisi')->count();
                @endphp
                <div onclick="openRoomModal('standar')" class="bg-kostay-card rounded-3xl overflow-hidden border border-kostay-cardBorder hover:border-kostay-secondary hover:shadow-2xl hover:shadow-kostay-secondary/10 transition-all duration-300 flex flex-col group cursor-pointer">
                    <!-- Photo Header (Kamar + Kamar Mandi Tepat di Bawahnya) -->
                    <div class="relative overflow-hidden bg-kostay-surface">
                        <div class="flex flex-col w-full">
                            <!-- Foto Kamar (Atas) -->
                            <div class="relative w-full aspect-[510/339] overflow-hidden" style="aspect-ratio: 510/339;">
                                <img src="{{ asset('images/rooms/type1_room.jpg') }}" alt="Kamar Tipe Standar koStay" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <span class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2.5 py-1 rounded-md text-[11px] font-bold text-white border border-white/10 flex items-center gap-1.5 z-10">
                                    <span>🛏️ Kamar Tidur & Kipas Angin Dinding</span>
                                </span>
                            </div>
                            <!-- Foto Kamar Mandi (Tepat di Bawahnya) -->
                            <div class="relative w-full aspect-[510/338] overflow-hidden border-t-2 border-kostay-cardBorder/80" style="aspect-ratio: 510/338;">
                                <img src="{{ asset('images/rooms/type1_bathroom.jpg') }}" alt="Kamar Mandi Tipe Standar koStay" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <span class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2.5 py-1 rounded-md text-[11px] font-bold text-white border border-white/10 flex items-center gap-1.5 z-10">
                                    <span>🚿 Kamar Mandi Dalam (Shower Reguler)</span>
                                </span>
                            </div>
                        </div>

                        <!-- Top Badges Overlay -->
                        <div class="absolute top-4 left-4 bg-kostay-neutral/90 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-bold text-white border border-white/10 flex items-center gap-2 shadow-lg">
                            <span>🌿 Tipe Standar</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                            <span class="text-kostay-tertiary">20 Unit</span>
                        </div>

                        <!-- Availability Badge -->
                        <div class="absolute top-4 right-4 bg-emerald-500/20 backdrop-blur-md border border-emerald-500/40 px-3.5 py-1.5 rounded-full text-xs font-extrabold text-emerald-300 shadow-lg flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>{{ $standarKosong }} Kamar Kosong</span>
                        </div>

                        <!-- Price Tag Overlay -->
                        <div class="absolute bottom-3 right-3 bg-kostay-neutral/90 backdrop-blur-md px-4 py-2 rounded-2xl border border-kostay-cardBorder shadow-xl text-right">
                            <span class="text-[10px] uppercase tracking-wider font-bold text-kostay-subtext block">Tarif Sewa</span>
                            <span class="text-xl font-extrabold text-white">Rp 1.550.000</span>
                            <span class="text-[10px] text-kostay-subtext font-semibold">/ bln</span>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="p-7 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-kostay-primary transition-colors flex items-center gap-2">
                                <span>Kamar Tipe Standar (A01 - A20)</span>
                                <svg class="w-5 h-5 text-kostay-primary transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                                </svg>
                            </h3>
                            <p class="text-sm text-kostay-subtext mt-2 leading-relaxed">
                                Pilihan nyaman & berkelas. Dilengkapi kamar mandi dalam, mini dapur pribadi, exhaust blower, kipas angin dinding, kasur springbed, lemari pakaian, meja belajar, dan WiFi 512 Mbps Multi-AP.
                            </p>

                            <!-- Facility Chips -->
                            <div class="flex flex-wrap gap-2 pt-4">
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🚿 Kamar Mandi Dalam</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-amber-300/90 border border-amber-500/30">🍳 Mini Dapur</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-teal-300/90 border border-teal-500/30">💨 Exhaust Blower</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-sky-300/90 border border-sky-500/30">🌀 Kipas Angin Dinding</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🛏️ Kasur Springbed</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🚪 Lemari Pakaian</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🪑 Meja Belajar</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-emerald-300/90 border border-emerald-500/30">📶 WiFi 512 Mbps</span>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="pt-4 border-t border-kostay-cardBorder/60 flex items-center justify-between">
                            <span class="text-xs font-semibold text-kostay-subtext">
                                {{ $standarKosong }} Tersedia • {{ $standarTerisi }} Terisi
                            </span>
                            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-extrabold bg-kostay-primary text-kostay-neutral group-hover:bg-kostay-primaryHover transition-all shadow-md">
                                <span>Lihat Kamar Kosong</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: TIPE EKSKLUSIF (10 KAMAR - AC + WATER HEATER) -->
                @php
                    $eksklusifTotal = $eksklusifRooms->count();
                    $eksklusifKosong = $eksklusifRooms->where('status', 'Tersedia')->count();
                    $eksklusifTerisi = $eksklusifRooms->where('status', 'Terisi')->count();
                @endphp
                <div onclick="openRoomModal('eksklusif')" class="bg-kostay-card rounded-3xl overflow-hidden border-2 border-kostay-primary/40 hover:border-kostay-primary hover:shadow-2xl hover:shadow-kostay-primary/15 transition-all duration-300 flex flex-col group cursor-pointer relative">
                    <!-- Top Ribbon Badge -->
                    <div class="absolute top-0 right-0 z-20 overflow-hidden w-32 h-32 pointer-events-none">
                        <div class="absolute transform rotate-45 bg-kostay-primary text-kostay-neutral font-extrabold text-[10px] uppercase tracking-wider text-center py-1 right-[-35px] top-[22px] w-[130px] shadow-md">
                            AC + Heater
                        </div>
                    </div>

                    <!-- Photo Header (Kamar + Kamar Mandi Tepat di Bawahnya) -->
                    <div class="relative overflow-hidden bg-kostay-surface">
                        <div class="flex flex-col w-full">
                            <!-- Foto Kamar (Atas) -->
                            <div class="relative w-full aspect-[510/339] overflow-hidden" style="aspect-ratio: 510/339;">
                                <img src="{{ asset('images/rooms/type2_room.jpg') }}" alt="Kamar Tipe Eksklusif koStay" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <span class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2.5 py-1 rounded-md text-[11px] font-bold text-white border border-white/10 flex items-center gap-1.5 z-10">
                                    <span>❄️ Kamar Tidur (AC Inverter + Kipas)</span>
                                </span>
                            </div>
                            <!-- Foto Kamar Mandi (Tepat di Bawahnya) -->
                            <div class="relative w-full aspect-[510/338] overflow-hidden border-t-2 border-kostay-cardBorder/80" style="aspect-ratio: 510/338;">
                                <img src="{{ asset('images/rooms/type2_bathroom.jpg') }}" alt="Kamar Mandi Tipe Eksklusif koStay" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <span class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2.5 py-1 rounded-md text-[11px] font-bold text-white border border-white/10 flex items-center gap-1.5 z-10">
                                    <span>♨️ Kamar Mandi Dalam (Water Heater)</span>
                                </span>
                            </div>
                        </div>

                        <!-- Top Badges Overlay -->
                        <div class="absolute top-4 left-4 bg-kostay-neutral/90 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-bold text-white border border-kostay-primary/30 flex items-center gap-2 shadow-lg">
                            <span class="text-kostay-primary">⭐ Tipe Eksklusif</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                            <span class="text-kostay-tertiary">10 Unit</span>
                        </div>

                        <!-- Availability Badge -->
                        <div class="absolute top-4 right-12 bg-emerald-500/20 backdrop-blur-md border border-emerald-500/40 px-3.5 py-1.5 rounded-full text-xs font-extrabold text-emerald-300 shadow-lg flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>{{ $eksklusifKosong }} Kamar Kosong</span>
                        </div>

                        <!-- Price Tag Overlay -->
                        <div class="absolute bottom-3 right-3 bg-kostay-neutral/90 backdrop-blur-md px-4 py-2 rounded-2xl border border-kostay-primary/40 shadow-xl text-right">
                            <span class="text-[10px] uppercase tracking-wider font-bold text-kostay-subtext block">Tarif Sewa</span>
                            <span class="text-xl font-extrabold text-kostay-primary">Rp 2.000.000</span>
                            <span class="text-[10px] text-kostay-subtext font-semibold">/ bln</span>
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="p-7 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-kostay-primary transition-colors flex items-center gap-2">
                                <span>Kamar Tipe Eksklusif (B01 - B10)</span>
                                <svg class="w-5 h-5 text-kostay-primary transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                                </svg>
                            </h3>
                            <p class="text-sm text-kostay-subtext mt-2 leading-relaxed">
                                Kenyamanan maksimal dengan tambahan <strong class="text-kostay-tertiary">AC Inverter & Water Heater</strong>. Dilengkapi seluruh fasilitas standar: kamar mandi dalam, mini dapur pribadi, exhaust blower, kasur Queen Size, lemari 2 pintu, meja belajar, dan WiFi 512 Mbps Multi-AP.
                            </p>

                            <!-- Facility Chips -->
                            <div class="flex flex-wrap gap-2 pt-4">
                                <span class="text-xs font-bold px-3 py-1.5 rounded-lg bg-kostay-primary/15 text-kostay-primary border border-kostay-primary/30">❄️ AC Inverter</span>
                                <span class="text-xs font-bold px-3 py-1.5 rounded-lg bg-kostay-secondary/20 text-kostay-secondaryLight border border-kostay-secondary/30">♨️ Water Heater Hangat</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🚿 Kamar Mandi Dalam</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-amber-300/90 border border-amber-500/30">🍳 Mini Dapur</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-teal-300/90 border border-teal-500/30">💨 Exhaust Blower</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🛏️ Kasur Queen Size</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🚪 Lemari 2 Pintu</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">🪑 Meja Belajar</span>
                                <span class="text-xs font-semibold px-3 py-1.5 rounded-lg bg-kostay-surface text-emerald-300/90 border border-emerald-500/30">📶 WiFi 512 Mbps</span>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="pt-4 border-t border-kostay-cardBorder/60 flex items-center justify-between">
                            <span class="text-xs font-semibold text-kostay-subtext">
                                {{ $eksklusifKosong }} Tersedia • {{ $eksklusifTerisi }} Terisi
                            </span>
                            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-extrabold bg-kostay-primary text-kostay-neutral group-hover:bg-kostay-primaryHover transition-all shadow-md">
                                <span>Lihat Kamar Kosong</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- POP-UP MODAL: KETERANGAN DETAIL & DAFTAR KAMAR KOSONG -->
    <div id="roomModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 overflow-y-auto">
        <!-- Backdrop -->
        <div onclick="closeRoomModal()" class="fixed inset-0 bg-black/80 backdrop-blur-md transition-opacity"></div>

        <!-- Modal Dialog Box -->
        <div class="relative bg-kostay-card border border-kostay-cardBorder rounded-3xl max-w-3xl w-full shadow-2xl overflow-hidden z-10 my-8">
            <!-- Modal Header -->
            <div class="p-6 sm:p-8 border-b border-kostay-cardBorder flex items-start justify-between bg-kostay-surface">
                <div>
                    <div class="flex items-center gap-2.5 mb-1.5">
                        <span id="modalTypeBadge" class="text-xs font-bold px-3 py-1 rounded-full bg-kostay-primary/20 text-kostay-primary border border-kostay-primary/30">
                            Tipe Standar
                        </span>
                        <span id="modalAvailabilityBadge" class="text-xs font-bold px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/40">
                            15 Kamar Kosong
                        </span>
                    </div>
                    <h3 id="modalTitle" class="text-2xl sm:text-3xl font-extrabold text-white">Detail Kamar Tipe Standar</h3>
                    <p id="modalPrice" class="text-lg font-bold text-kostay-primary mt-1">Rp 1.550.000 <span class="text-xs text-kostay-subtext font-normal">/ bulan</span></p>
                </div>
                <button onclick="closeRoomModal()" class="w-10 h-10 rounded-full bg-kostay-card border border-kostay-cardBorder text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 sm:p-8 space-y-6 max-h-[82vh] overflow-y-auto">
                <!-- Image & Spec Summary (Kamar & Kamar Mandi Tepat di Bawahnya) -->
                <div class="grid sm:grid-cols-12 gap-6 items-start">
                    <div class="sm:col-span-5 space-y-3">
                        <!-- Foto Kamar (Atas) -->
                        <div class="w-full aspect-[510/339] rounded-2xl overflow-hidden border border-kostay-cardBorder relative" style="aspect-ratio: 510/339;">
                            <img id="modalImageRoom" src="" alt="Foto Kamar Tidur" class="w-full h-full object-cover">
                            <span id="modalLabelRoom" class="absolute bottom-2 left-2 text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-black/75 text-white backdrop-blur-sm border border-white/10 z-10">
                                🛏️ Kamar Tidur
                            </span>
                        </div>
                        <!-- Foto Kamar Mandi (Tepat di Bawahnya) -->
                        <div class="w-full aspect-[510/338] rounded-2xl overflow-hidden border border-kostay-cardBorder relative" style="aspect-ratio: 510/338;">
                            <img id="modalImageBath" src="" alt="Foto Kamar Mandi" class="w-full h-full object-cover">
                            <span id="modalLabelBath" class="absolute bottom-2 left-2 text-[10px] font-bold px-2.5 py-0.5 rounded-md bg-black/75 text-white backdrop-blur-sm border border-white/10 z-10">
                                🚿 Kamar Mandi Dalam
                            </span>
                        </div>
                    </div>
                    <div class="sm:col-span-7 space-y-3">
                        <h4 class="text-sm font-bold uppercase tracking-wider text-kostay-secondary">Deskripsi & Fasilitas Kamar:</h4>
                        <p id="modalDesc" class="text-xs sm:text-sm text-kostay-subtext leading-relaxed"></p>
                        <div id="modalChips" class="flex flex-wrap gap-1.5 pt-1"></div>
                    </div>
                </div>

                <!-- SECTION: DAFTAR NOMOR KAMAR & STATUS KOSONG -->
                <div class="pt-4 border-t border-kostay-cardBorder">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                        <div>
                            <h4 class="text-base font-bold text-white flex items-center gap-2">
                                <span>Daftar Nomor Kamar</span>
                                <span class="text-xs font-normal text-kostay-subtext">(Klik kamar kosong untuk memilih)</span>
                            </h4>
                        </div>
                        <!-- Legend Status -->
                        <div class="flex items-center gap-3 text-[11px] text-kostay-subtext">
                            <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span> Kosong</span>
                            <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-slate-600"></span> Terisi</span>
                            <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> Perbaikan</span>
                        </div>
                    </div>

                    <!-- Room Badges Grid -->
                    <div id="roomBadgesGrid" class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-6 gap-3">
                        <!-- Populated by JS -->
                    </div>
                </div>

                <!-- Selected Room Alert / Info -->
                <div id="selectedRoomBox" class="p-4 rounded-2xl bg-kostay-surface border border-kostay-primary/40 flex items-center justify-between">
                    <div>
                        <p class="text-xs text-kostay-subtext">Kamar yang Anda Pilih:</p>
                        <p id="selectedRoomText" class="text-base font-extrabold text-white">Belum memilih (Silakan klik salah satu kamar hijau)</p>
                    </div>
                    <span class="text-xs font-bold text-emerald-400 bg-emerald-500/10 border border-emerald-500/30 px-3 py-1 rounded-full">
                        Status: Siap Huni
                    </span>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="p-6 bg-kostay-surface border-t border-kostay-cardBorder flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs text-kostay-subtext text-center sm:text-left">
                    Pengelola akan segera mengonfirmasi ketersediaan kamar yang Anda pilih.
                </p>
                <a id="btnBookingWA" href="#" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-full text-sm font-extrabold bg-kostay-primary text-kostay-neutral hover:bg-kostay-primaryHover shadow-lg shadow-kostay-primary/25 transition-all">
                    <svg class="w-4 h-4 text-emerald-950" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/>
                    </svg>
                    <span>Ajukan Sewa via WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
        </div>
    </section>

    <!-- 5. KEUNTUNGAN SISTEM DIGITAL KOSTAY -->
    <section id="benefit" class="py-24 bg-kostay-surface border-y border-kostay-cardBorder/80 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-kostay-primary bg-kostay-card px-4 py-1.5 rounded-full border border-kostay-cardBorder">
                        Keunggulan Layanan Digital
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
                        Mengapa Tinggal di koStay Lebih Tenang & Praktis?
                    </h2>
                    <p class="text-kostay-subtext text-base leading-relaxed">
                        Kami tidak hanya menyediakan kamar fisik yang nyaman, tetapi juga sistem berbasis web yang dirancang khusus untuk mempermudah hidup penghuni kost.
                    </p>

                    <div class="space-y-4 pt-2">
                        <!-- Benefit 1 -->
                        <div class="flex gap-4 items-start">
                            <div class="w-9 h-9 rounded-xl bg-kostay-primary/20 text-kostay-primary flex items-center justify-center shrink-0 font-bold border border-kostay-primary/30">
                                ✓
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-base">Tagihan Sewa Transparan & Notifikasi Tepat Waktu</h4>
                                <p class="text-sm text-kostay-subtext mt-1">Invoice bulanan diterbitkan otomatis dengan rincian biaya yang jelas dan batas jatuh tempo tanpa biaya tersembunyi.</p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="flex gap-4 items-start">
                            <div class="w-9 h-9 rounded-xl bg-kostay-secondary/20 text-kostay-secondaryLight flex items-center justify-center shrink-0 font-bold border border-kostay-secondary/30">
                                ✓
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-base">Upload Bukti Bayar & Kuitansi PDF Instan</h4>
                                <p class="text-sm text-kostay-subtext mt-1">Cukup upload foto struk transfer dari smartphone, admin akan memverifikasi dan kuitansi digital langsung tersimpan aman.</p>
                            </div>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="flex gap-4 items-start">
                            <div class="w-9 h-9 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center shrink-0 font-bold border border-amber-500/30">
                                ✓
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-base">Helpdesk Keluhan & Perbaikan Fasilitas Cepat</h4>
                                <p class="text-sm text-kostay-subtext mt-1">Kran bocor, AC kurang dingin, atau lampu mati? Laporkan dengan foto kendala di portal, dan pantau progres perbaikannya secara real-time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <a href="{{ url('/login') }}" class="inline-flex items-center gap-3 px-8 py-4 rounded-full text-base font-extrabold bg-kostay-primary hover:bg-kostay-primaryHover text-kostay-neutral shadow-xl shadow-kostay-primary/25 transition-all">
                            <span>Masuk ke Akun koStay Anda</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Visual: Portal Preview Card -->
                <div class="lg:col-span-6">
                    <div class="bg-kostay-card border border-kostay-cardBorder rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl space-y-6">
                        <div class="flex items-center justify-between pb-4 border-b border-kostay-cardBorder">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-rose-500"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                <span class="text-xs text-kostay-subtext font-mono ml-2">portal.kostay.com/tenant</span>
                            </div>
                            <span class="text-xs text-kostay-primary font-semibold">Live Preview</span>
                        </div>

                        <!-- Mini Mockup Card inside -->
                        <div class="bg-kostay-surface rounded-2xl p-5 border border-kostay-cardBorder space-y-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-xs text-kostay-subtext">Penyewa Aktif</p>
                                    <p class="text-sm font-bold text-white">Panji Setiadarma • Kamar B01 (Eksklusif)</p>
                                </div>
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">Kontrak Aktif</span>
                            </div>
                            <div class="p-4 rounded-xl bg-kostay-card border border-kostay-cardBorder flex justify-between items-center">
                                <div>
                                    <p class="text-xs text-kostay-secondaryLight">Tagihan Sewa Bulan Ini</p>
                                    <p class="text-lg font-extrabold text-kostay-primary">Rp 2.000.000</p>
                                </div>
                                <span class="px-3 py-1.5 rounded-full text-xs font-bold bg-kostay-primary/20 text-kostay-primary border border-kostay-primary/30">Belum Lunas</span>
                            </div>
                            <div class="flex justify-between items-center text-xs text-kostay-subtext pt-2 border-t border-kostay-cardBorder/60">
                                <span>Tiket Keluhan: Lampu Kamar Mandi</span>
                                <span class="text-kostay-secondaryLight font-semibold">Status: Sedang Ditangani</span>
                            </div>
                        </div>

                        <p class="text-xs text-kostay-subtext text-center italic">
                            Setiap penghuni memiliki akses akun mandiri untuk mengelola kebutuhan sewa tanpa ribet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FREQUENTLY ASKED QUESTIONS (FAQ) -->
    <section id="faq" class="py-24 bg-kostay-neutral">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-kostay-primary bg-kostay-card px-4 py-1.5 rounded-full border border-kostay-cardBorder">
                    Pertanyaan Umum
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-4 tracking-tight">
                    Hal yang Sering Ditanyakan (FAQ)
                </h2>
            </div>

            <div class="space-y-4">
                <div class="p-6 rounded-2xl bg-kostay-card border border-kostay-cardBorder">
                    <h4 class="font-bold text-white text-base">Bagaimana cara memesan atau menyewa kamar di koStay?</h4>
                    <p class="text-sm text-kostay-subtext mt-2 leading-relaxed">
                        Anda dapat memeriksa ketersediaan kamar pada bagian "Pilihan Kamar" di atas, lalu klik tombol "Ajukan Sewa Kamar Ini" untuk menghubungi pengelola via WhatsApp dan menjadwalkan survei lokasi atau konfirmasi sewa.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-kostay-card border border-kostay-cardBorder">
                    <h4 class="font-bold text-white text-base">Berapa nominal uang deposit/jaminan awal sewa?</h4>
                    <p class="text-sm text-kostay-subtext mt-2 leading-relaxed">
                        Uang jaminan (deposit) standar adalah Rp 500.000 yang dibayarkan di awal sewa dan akan dikembalikan utuh saat masa kontrak sewa selesai tanpa adanya kerusakan fasilitas.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-kostay-card border border-kostay-cardBorder">
                    <h4 class="font-bold text-white text-base">Bagaimana jika terjadi kerusakan fasilitas kamar?</h4>
                    <p class="text-sm text-kostay-subtext mt-2 leading-relaxed">
                        Penghuni cukup login ke portal koStay, masuk ke menu "Keluhan Fasilitas", lalu unggah foto dan keterangan kendala. Pengelola akan segera menugaskan teknisi untuk memperbaikinya.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-kostay-card border border-kostay-cardBorder">
                    <h4 class="font-bold text-white text-base">Kapan batas jatuh tempo pembayaran sewa bulanan?</h4>
                    <p class="text-sm text-kostay-subtext mt-2 leading-relaxed">
                        Jatuh tempo pembayaran dihitung per tanggal mulai kontrak sewa Anda setiap bulannya (misal: tanggal 10 setiap bulan). Invoice digital dapat dicek langsung melalui portal koStay.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
    <footer class="bg-black/60 border-t border-kostay-cardBorder/80 text-kostay-subtext py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-10 pb-12 border-b border-kostay-cardBorder/60">
                <!-- Col 1 -->
                <div class="space-y-4 md:col-span-2">
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-2xl bg-kostay-primary flex items-center justify-center text-kostay-neutral font-extrabold">
                            🏠
                        </div>
                        <span class="text-2xl font-extrabold text-white tracking-tight">koStay</span>
                    </div>
                    <p class="text-sm text-kostay-subtext max-w-sm leading-relaxed">
                        Sistem Informasi Manajemen dan Pembayaran Kost Modern berbasis Web. Menghadirkan kenyamanan tempat tinggal dengan transparansi administrasi.
                    </p>
                    <p class="text-xs text-slate-500">
                        Dikembangkan untuk Tugas Besar mata kuliah Implementasi Perangkat Lunak (IPL) - Kelompok 4, Universitas Jenderal Achmad Yani.
                    </p>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h5 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Navigasi</h5>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#beranda" class="hover:text-kostay-primary transition-colors">Beranda</a></li>
                        <li><a href="#fasilitas" class="hover:text-kostay-primary transition-colors">Fasilitas Kost</a></li>
                        <li><a href="#kamar" class="hover:text-kostay-primary transition-colors">Pilihan Kamar</a></li>
                        <li><a href="#benefit" class="hover:text-kostay-primary transition-colors">Keunggulan koStay</a></li>
                        <li><a href="{{ url('/login') }}" class="hover:text-kostay-primary transition-colors">Portal Login</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact Info -->
                <div>
                    <h5 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Hubungi Kami</h5>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2.5">
                            <span class="text-kostay-primary">📍</span>
                            <span>Jl. Terusan Jenderal Sudirman, Cimahi, Jawa Barat</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-kostay-primary">📞</span>
                            <span>0812-3456-7890</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="text-kostay-primary">✉️</span>
                            <span>admin@kostay.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; 2026 koStay (Tubes IPL Kelompok 4). All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-kostay-tertiary transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-kostay-tertiary transition-colors">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE SCRIPT FOR ROOM SELECTION MODAL -->
    <script>
        const dataStandarRooms = @json($standarRooms);
        const dataEksklusifRooms = @json($eksklusifRooms);
        let selectedRoomNumber = '';

        function openRoomModal(type) {
            const modal = document.getElementById('roomModal');
            const modalTypeBadge = document.getElementById('modalTypeBadge');
            const modalAvailabilityBadge = document.getElementById('modalAvailabilityBadge');
            const modalTitle = document.getElementById('modalTitle');
            const modalPrice = document.getElementById('modalPrice');
            const modalImageRoom = document.getElementById('modalImageRoom');
            const modalImageBath = document.getElementById('modalImageBath');
            const modalLabelRoom = document.getElementById('modalLabelRoom');
            const modalLabelBath = document.getElementById('modalLabelBath');
            const modalDesc = document.getElementById('modalDesc');
            const modalChips = document.getElementById('modalChips');
            const grid = document.getElementById('roomBadgesGrid');
            const selectedBoxText = document.getElementById('selectedRoomText');
            const btnWA = document.getElementById('btnBookingWA');

            let rooms = [];
            let typeName = '';
            let price = '';
            let imageRoom = '';
            let imageBath = '';
            let labelRoom = '';
            let labelBath = '';
            let desc = '';
            let chips = [];

            if (type === 'standar') {
                rooms = dataStandarRooms;
                typeName = 'Tipe Standar (20 Kamar)';
                price = 'Rp 1.550.000';
                imageRoom = '{{ asset("images/rooms/type1_room.jpg") }}';
                imageBath = '{{ asset("images/rooms/type1_bathroom.jpg") }}';
                labelRoom = '🛏️ Kamar Tidur & Kipas Angin Dinding';
                labelBath = '🚿 Kamar Mandi Dalam (Shower Reguler)';
                desc = 'Kamar Tipe Standar dirancang estetik, bersih, dan nyaman. Dilengkapi kamar mandi dalam (shower reguler), mini dapur pribadi, exhaust blower, kipas angin dinding sejuk, kasur springbed, lemari pakaian, meja & kursi belajar, dan WiFi 512 Mbps Multi-AP (Non-AC & Tanpa Water Heater).';
                chips = ['🚿 Kamar Mandi Dalam', '🍳 Mini Dapur Pribadi', '💨 Exhaust Blower', '🌀 Kipas Angin Dinding', '🛏️ Kasur Springbed', '🚪 Lemari Pakaian', '🪑 Meja Belajar', '📶 WiFi 512 Mbps'];
            } else {
                rooms = dataEksklusifRooms;
                typeName = 'Tipe Eksklusif (10 Kamar)';
                price = 'Rp 2.000.000';
                imageRoom = '{{ asset("images/rooms/type2_room.jpg") }}';
                imageBath = '{{ asset("images/rooms/type2_bathroom.jpg") }}';
                labelRoom = '❄️ Kamar Tidur (AC Inverter + Kipas)';
                labelBath = '♨️ Kamar Mandi Dalam (Water Heater Hangat)';
                desc = 'Kamar Tipe Eksklusif menghadirkan kenyamanan premium ber-AC Inverter dan pemanas air hangat (Water Heater). Memiliki seluruh fasilitas Tipe Standar ditambah kasur Queen Size, lemari 2 pintu, meja belajar, mini dapur pribadi, exhaust blower, dan WiFi 512 Mbps Multi-AP.';
                chips = ['❄️ AC Inverter Sejuk', '♨️ Water Heater Hangat', '🚿 Kamar Mandi Dalam', '🍳 Mini Dapur Pribadi', '💨 Exhaust Blower', '🛏️ Kasur Queen Size', '🚪 Lemari 2 Pintu', '🪑 Meja Belajar', '📶 WiFi 512 Mbps'];
            }

            const kosongCount = rooms.filter(r => r.status === 'Tersedia').length;

            modalTypeBadge.textContent = typeName;
            modalAvailabilityBadge.textContent = `${kosongCount} Kamar Kosong (Siap Huni)`;
            modalTitle.textContent = `Pilihan Kamar ${typeName}`;
            modalPrice.innerHTML = `${price} <span class="text-xs text-kostay-subtext font-normal">/ bulan</span>`;
            modalImageRoom.src = imageRoom;
            modalImageBath.src = imageBath;
            modalLabelRoom.textContent = labelRoom;
            modalLabelBath.textContent = labelBath;
            modalDesc.textContent = desc;

            modalChips.innerHTML = chips.map(c => `<span class="text-xs font-semibold px-2.5 py-1 rounded-lg bg-kostay-surface text-kostay-subtext border border-kostay-cardBorder">${c}</span>`).join('');

            // Reset selection
            selectedRoomNumber = '';
            selectedBoxText.textContent = 'Belum memilih (Silakan klik salah satu kamar hijau di atas)';
            btnWA.href = `https://wa.me/6281234567890?text=Halo%20Pengelola%20koStay,%20saya%20ingin%20tanya%20sewa%20kamar%20${encodeURIComponent(typeName)}`;

            // Render Room Badges Grid
            grid.innerHTML = '';
            rooms.forEach(r => {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'p-3 rounded-2xl flex flex-col items-center justify-center transition-all border text-center ';

                if (r.status === 'Tersedia') {
                    btn.className += 'bg-emerald-500/15 border-emerald-500/40 text-emerald-300 hover:bg-emerald-500/25 cursor-pointer hover:scale-105';
                    btn.innerHTML = `<span class="font-bold text-sm text-white">${r.room_number}</span><span class="text-[9px] font-semibold text-emerald-400">Kosong</span>`;
                    btn.onclick = () => selectRoom(r.room_number, typeName);
                } else if (r.status === 'Terisi') {
                    btn.className += 'bg-slate-900/60 border-slate-800 text-slate-500 cursor-not-allowed opacity-60';
                    btn.innerHTML = `<span class="font-bold text-sm">${r.room_number}</span><span class="text-[9px]">Terisi</span>`;
                    btn.disabled = true;
                } else {
                    btn.className += 'bg-amber-500/10 border-amber-500/30 text-amber-400/80 cursor-not-allowed opacity-75';
                    btn.innerHTML = `<span class="font-bold text-sm">${r.room_number}</span><span class="text-[9px]">Perbaikan</span>`;
                    btn.disabled = true;
                }

                btn.id = `room-btn-${r.room_number}`;
                grid.appendChild(btn);
            });

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }

        function selectRoom(num, typeName) {
            selectedRoomNumber = num;
            document.querySelectorAll('#roomBadgesGrid button').forEach(b => b.classList.remove('ring-2', 'ring-kostay-primary', 'scale-105'));

            const target = document.getElementById(`room-btn-${num}`);
            if (target) {
                target.classList.add('ring-2', 'ring-kostay-primary', 'scale-105');
            }

            document.getElementById('selectedRoomText').innerHTML = `<span class="text-kostay-primary font-bold">Kamar ${num}</span> (${typeName}) — Siap Dipesan`;
            document.getElementById('btnBookingWA').href = `https://wa.me/6281234567890?text=Halo%20Pengelola%20koStay,%20saya%20ingin%20memesan%20Kamar%20${num}%20(${encodeURIComponent(typeName)})%20yang%20masih%20kosong`;
        }

        function closeRoomModal() {
            const modal = document.getElementById('roomModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');
        }
    </script>

</body>
</html>
