<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * { box-sizing: border-box; }
        
        /* Mengunci tinggi body utama */
        body {
            background: radial-gradient(circle at top, #7c3aed, transparent 40%),
                        radial-gradient(circle at bottom, #2563eb, transparent 40%),
                        linear-gradient(135deg,#2e1065,#4c1d95);
            color: white;
            height: 100vh;
            margin: 0;
            overflow: hidden; 
            display: flex;
            flex-direction: column; /* Menyusun vertikal: Wrapper Tengah -> Footer Penuh */
        }

        /* ===== WRAPPER UTAMA (Mengisi area atas sampai sebelum footer) ===== */
        .app-wrapper {
            display: flex;
            flex: 1;
            width: 100vw;
            align-items: stretch;
            overflow: hidden;
        }

        /* ===== SIDEBAR VERTIKAL (Dengan Efek Toggle Smooth) ===== */
        .sidebar {
            width: 255px;
            background: rgba(15, 23, 42, 0.55);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-right: 1px solid rgba(255,255,255,0.1); 
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            height: 100%; 
            overflow-y: auto;
            overflow-x: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); /* Transisi halus animasi menutup */
        }
        
        /* State ketika sidebar dikecilkan (Toggled) */
        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-brand {
            padding: 20px 15px 16px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            gap: 12px;
            height: 77px; /* Menyamakan tinggi agar rapi */
        }
        .sidebar-brand img {
            width: 40px; height: 40px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.25);
            object-fit: cover;
            flex-shrink: 0;
        }
        
        /* Menyembunyikan teks saat sidebar mengecil */
        .sidebar.collapsed .brand-info,
        .sidebar.collapsed .nav-label,
        .sidebar.collapsed .nav-text,
        .sidebar.collapsed .coming-soon {
            display: none !important;
        }

        .brand-text  { font-size: 14px; font-weight: 600; color: white; line-height: 1.2; white-space: nowrap; }
        .brand-role  { font-size: 11px; color: rgba(255,255,255,0.4); white-space: nowrap; }

        .sidebar-nav {
            flex: 1;
            padding: 14px 10px;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }
        .nav-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.2px;
            color: rgba(255,255,255,0.3);
            text-transform: uppercase;
            padding: 10px 10px 5px;
            white-space: nowrap;
        }
        .sidebar .nav-item {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 10px 14px;
            border-radius: 10px;
            color: rgba(255,255,255,0.6);
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid transparent;
            transition: all 0.2s;
            white-space: nowrap;
        }
        
        /* Penyesuaian padding item menu saat sidebar mengecil agar ikon tetap di tengah */
        .sidebar.collapsed .nav-item {
            justify-content: center;
            padding: 10px 0;
        }

        .sidebar .nav-item:hover {
            background: rgba(255,255,255,0.08);
            color: white;
            border-color: rgba(255,255,255,0.08);
        }
        .sidebar .nav-item.active {
            background: linear-gradient(90deg, rgba(124,58,237,0.45), rgba(37,99,235,0.3));
            color: white;
            border-color: rgba(124,58,237,0.4);
        }
        .sidebar .nav-item.disabled {
            opacity: 0.35;
            pointer-events: none;
            cursor: not-allowed;
        }
        .sidebar .nav-item i {
            font-size: 15px;
            width: 18px;
            text-align: center;
            flex-shrink: 0;
        }
        .sidebar-bottom {
            padding: 10px 10px 18px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        /* ===== AREA KANAN (Membawahi Topbar & Konten Tabel) ===== */
        .main-area {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: 100%;
            overflow: hidden;
        }

        /* ===== TOPBAR HORIZONTAL (Dengan Tombol Hamburger) ===== */
        .topbar {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
            height: 77px; /* Menyamakan baris tinggi dengan brand sidebar */
        }
        
        .topbar-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Style Keren Tombol Hamburger Modern */
        .hamburger-btn {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }
        .hamburger-btn:hover {
            background: rgba(124, 58, 237, 0.3);
            border-color: rgba(124, 58, 237, 0.5);
            transform: scale(1.05);
        }
        .hamburger-btn i {
            font-size: 16px;
            transition: transform 0.3s;
        }
        /* Efek rotasi ikon ketika diklik */
        .hamburger-btn.active i {
            transform: rotate(90deg);
        }

        .topbar .page-title { font-size: 15px; font-weight: 600; color: white; }
        .btn-logout {
            background: rgba(239,68,68,0.15);
            border: 1px solid rgba(239,68,68,0.35);
            color: #fca5a5;
            padding: 7px 16px;
            border-radius: 8px;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-logout:hover { background: rgba(239,68,68,0.3); color: white; }

        /* ===== MAIN CONTENT (Area Scroll Data) ===== */
        .main-content {
            flex: 1;
            padding: 28px;
            overflow-y: auto; 
        }

        /* ===== GLASS EFFECT ===== */
        .glass {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* ===== FOOTER HORIZONTAL ===== */
        footer {
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(12px);
            border-top: 1px solid rgba(255,255,255,0.08);
            padding: 8px 0;
            flex-shrink: 0;
            width: 100vw;
            z-index: 20;
        }
        .footer-logo {
            font-size: 15px; font-weight: 700;
            background: linear-gradient(45deg, #a855f7, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .social-icon {
            width: 26px; height: 26px;
            display: inline-flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.06); border-radius: 6px; color: rgba(255,255,255,0.6);
            margin-left: 6px; transition: 0.2s;
            border: 1px solid rgba(255,255,255,0.05);
            font-size: 11px;
            text-decoration: none;
        }
        .social-icon:hover { background: #7c3aed; color: white; transform: translateY(-2px); }
        table { color: white; }
        .btn-danger { border-radius: 10px; }
    </style>
</head>
<body>

    {{-- Wrapper Tengah --}}
    <div class="app-wrapper">

        {{-- 1. Sidebar Vertikal (Mendukung Toggle Collapse) --}}
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-brand">
                <img src="{{ asset('images/WhatsApp Image 2025-08-24 at 11.31.55.jpeg') }}" alt="Logo">
                <div class="brand-info">
                    <div class="brand-text">Yohan Dev</div>
                    <div class="brand-role">Administrator</div>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-label">Menu Utama</div>

                <span class="nav-item disabled">
                    <i class="fas fa-layer-group"></i>
                    <span class="nav-text">Master Data</span>
                    <span class="coming-soon">soon</span>
                </span>

                <a href="{{ route('admin.messages') }}"
                   class="nav-item {{ request()->routeIs('admin.messages') ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i>
                    <span class="nav-text">Pesan Masuk</span>
                </a>

                <div class="nav-label">Akun</div>

                <span class="nav-item disabled">
                    <i class="fas fa-user-circle"></i>
                    <span class="nav-text">Profile</span>
                    <span class="coming-soon">soon</span>
                </span>
            </nav>

            <div class="sidebar-bottom">
                <div class="nav-label" style="padding-top:0">Sistem</div>

                <span class="nav-item disabled">
                    <i class="fas fa-cog"></i>
                    <span class="nav-text">Pengaturan</span>
                    <span class="coming-soon">soon</span>
                </span>
            </div>
        </aside>

        {{-- Area Kanan --}}
        <div class="main-area">
            
            {{-- 2. Topbar Horizontal dengan Tombol Hamburger --}}
            <div class="topbar">
                <div class="topbar-left">
                    <button class="hamburger-btn" id="hamburgerBtn" title="Toggle Sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <span class="page-title">
                        <i class="fas fa-circle-dot me-2" style="color:#a855f7; font-size:10px;"></i>
                        @yield('page-title', 'Dashboard Admin')
                    </span>
                </div>
                
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </button>
                </form>
            </div>

            {{-- 3. Area Isi Konten --}}
            <div class="main-content">
                @yield('content')
            </div>

        </div>{{-- end .main-area --}}
    </div>{{-- end .app-wrapper --}}

    {{-- 4. Footer Horizontal --}}
    <footer>
        <div class="container-fluid px-4">
            <div class="row align-items-center py-2">
                <div class="col-md-4 text-center text-md-start">
                    <span class="footer-logo d-inline-block me-2" style="font-size: 14px;">Admin Panel</span>
                    <span class="text-white-50" style="font-size: 11px;">&copy; 2026 All Rights Reserved.</span>
                </div>
                
                <div class="col-md-5 text-center my-2 my-md-0">
                    <div class="d-flex justify-content-center gap-3 text-white-50" style="font-size: 11px;">
                        <span><i class="fas fa-server text-success me-1"></i> MySQL Online</span>
                        <span class="text-muted">|</span>
                        <span><i class="fas fa-location-dot me-1" style="color: #c084fc;"></i> Papua, ID</span>
                        <span class="text-muted">|</span>
                        <a href="{{ route('myportfolio') }}" class="text-white-50 text-decoration-none" target="_blank">
                            <i class="fas fa-globe me-1"></i> Lihat Web
                        </a>
                    </div>
                </div>

                <div class="col-md-3 text-center text-md-end">
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const hamburgerBtn = document.getElementById("hamburgerBtn");
        const sidebar = document.getElementById("sidebar");

        hamburgerBtn.addEventListener("click", function() {
            // Toggle class 'collapsed' pada sidebar
            sidebar.classList.toggle("collapsed");
            // Toggle class 'active' untuk animasi rotasi tombol hamburger
            hamburgerBtn.classList.toggle("active");
        });
    });
</script>
</body>
</html>