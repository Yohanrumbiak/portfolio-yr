<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: radial-gradient(circle at top, #7c3aed, transparent 40%),
                        radial-gradient(circle at bottom, #2563eb, transparent 40%),
                        linear-gradient(135deg,#2e1065,#4c1d95);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column; 
        }
        .main-content {
            flex: 1;
            padding-top: 20px;
        }
        
        /* Glass Effect */
        .glass {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        /* Navbar */
        .navbar{
            background: rgba(15, 23, 42, 0.6) !important;
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand{
            color:white;
            font-weight:bold;
        }
        
        /* Table */
        table{
            color:white;
        }
        
        /* Button */
        .btn-danger{
            border-radius:10px;
        }

         /* FOOTER GLASS STYLE */
        footer {
            background: rgba(15, 23, 42, 0.4) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 30px 0 15px;
            /* padding: 20px 0; */
            width: 100%;
            /* margin-top: 80px; */
            margin-top: auto;
            position: relative;
            overflow: hidden;
        }
        /* TARGET UTAMA: Menghapus arsiran ungu (margin) yang kamu lihat di inspect */
        /* Reset semua margin bawah elemen terakhir agar tidak mendorong footer */
        footer .container > .row:last-child,
        footer .container > .row:last-child .col-md-12,
        footer .container > .row:last-child p {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important;
        }
        .footer-logo {
            font-size: 24px;
            font-weight: bold;
            background: linear-gradient(45deg, #a855f7, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 15px !important;
            line-height: 1.2;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: 0.3s;
            font-size: 0.95rem;
        }

        .footer-link:hover {
            color: #c084fc;
            padding-left: 5px;
        }

        .social-icon {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            margin-right: 10px;
            transition: 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-icon:hover {
            background: #7c3aed;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(124, 58, 237, 0.4);
        }
        /* Mengatur HR agar tidak terlalu lebar jaraknya */
        footer hr {
            margin-top: 30px !important;
            margin-bottom: 20px !important;
            opacity: 0.1;
        }

        /* Pastikan input group tidak menambah tinggi footer secara liar */
        footer .input-group {
            margin-bottom: 0 !important;
        }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <nav class="navbar navbar-dark px-4">
             <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                <img src="{{ asset('images/WhatsApp Image 2025-08-24 at 11.31.55.jpeg') }}" 
                    alt="Logo" 
                    width="40" 
                    height="40" 
                    class="rounded-circle me-2 border border-2 border-light shadow-sm">
                Dashboard Admin
            </a>

        <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btn-logout">
                Logout
            </button>
        </form>
    </nav>   

<div class="container mt-5">
    @yield('content')
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->

</div>
<footer>
        <div class="container">
            <div class="row gy-4 text-start">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo mb-3">Dashboard Admin Panel</div>
                    <p class="text-white-50">Sistem manajemen konten untuk portfolio. Fokus pada efisiensi data dan monitoring pesan masuk secara real-time.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-3 text-white">Admin Quick Link</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Dashboard</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Pesan Masuk</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Lihat Web Utama</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-12">
                    <h5 class="fw-bold mb-3 text-white">Sistem Info</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="fas fa-server me-2"></i> Status: Online</li>
                        <li class="mb-2"><i class="fas fa-database me-2"></i> Database Terhubung: MySQL</li>
                        <li class="mb-2"><i class="fas fa-location-dot me-2"></i> Papua, Indonesia</li>
                    </ul>
                </div>
            </div>

            <hr style="border-color: rgba(255,255,255,0.1); margin-top: 40px; margin-bottom: 20px;">

            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="text-white-50 small">&copy; 2026 Yohan Dev Admin. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>