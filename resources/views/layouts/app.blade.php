<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Umum</title>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if(Request::is('myportfolio*') || Request::is('/'))
    @vite([
        'resources/css/jquery.flipster.min.css', 
        'resources/js/app.js',
        'resources/js/jquery.flipster.min.js'
    ])
    @endif

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #7c3aed, transparent 40%),
                        radial-gradient(circle at bottom, #2563eb, transparent 40%),
                        linear-gradient(135deg,#2e1065,#4c1d95);
            color: white;
            scroll-behavior: smooth;
            padding-top: 70px;
            min-height: 100vh;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .section {
            padding: 100px 0;
        }

        /* GLASS EFFECT CARD */
        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            color: white;
            transition: 0.3s ease-in-out;
        }
        .project-card {
            transition: 0.3s ease-in-out;
        }
        .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
        }

        /* INPUT GLASS STYLE */
        input,
        textarea {
            background: rgba(255, 255, 255, 0.15) !important;
            border: none !important;
            color: white !important;
        }
        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        input:focus,
        textarea:focus {
            box-shadow: 0 0 0 2px #c084fc !important;
            outline: none;
        }

        /* BUTTON PURPLE STYLE */
        .btn-dark {
            background: linear-gradient(45deg, #7c3aed, #a855f7);
            border: none;
            transition: 0.3s ease;
        }
        .btn-dark:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(168, 85, 247, 0.6);
        }

        /* Navbar glass */
        .navbar {
            background: rgba(15, 23, 42, 0.6) !important;
            backdrop-filter: blur(10px);
        }

        /* CIRCULAR SKILL DESIGN */
        .skill-circle {
            --size: 140px;
            width: var(--size);
            height: var(--size);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin: auto;
            font-weight: bold;
            font-size: 20px;
            color: white;
            background: conic-gradient(
                #a855f7 calc(var(--percentage) * 1%), 
                rgba(255,255,255,0.1) 0%
            );
            box-shadow: 0 0 25px rgba(168, 85, 247, 0.6);
            transition: 0.5s ease;
        }
        .skill-circle::before {
            content: "";
            position: absolute;
            width: 75%;
            height: 75%;
            background: rgba(15, 23, 42, 0.9);
            border-radius: 50%;
            backdrop-filter: blur(10px);
        }
        .skill-circle span {
            position: relative;
            z-index: 2;
        }
        .skill-circle:hover {
            transform: scale(1.08);
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.9);
        }
        .form-control::placeholder {
        color: #c7aee2ff !important;
        opacity: 1 !important;
        }
        .form-control:focus::placeholder {
            color: #c084fc !important;
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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container-fluid px-4">
             <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                <img src="{{ asset('images/WhatsApp Image 2025-08-24 at 11.31.55.jpeg') }}" 
                    alt="Logo" 
                    width="40" 
                    height="40" 
                    class="rounded-circle me-2 border border-2 border-light shadow-sm">
                My Portfolio
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center d-flex flex-column align-items-center flex-md-row pt-3 pt-md-0">
                    <li class="nav-item px-lg-2">
                        <a class="nav-link nav-link-custom {{ Request::is('myportfolio*') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link nav-link-custom {{ Request::is('about*') ? 'active' : '' }}" href="/about">About Me</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link nav-link-custom {{ Request::is('projects*') ? 'active' : '' }}" href="/projects">Projects</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link nav-link-custom {{ Request::is('contact*') ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    @stack('scripts')

    <footer>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-logo mb-3">Dashboard Portfolio</div>
                <p class="text-white-50">Sedang membangun masa depan melalui kode dan desain. Fokus pada pengembangan Sistem Informasi dan Network Engineering.</p>
                <div class="mt-4">
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="fw-bold mb-3">Navigation</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="footer-link">Home</a></li>
                    <li class="mb-2"><a href="/about" class="footer-link">About Me</a></li>
                    <li class="mb-2"><a href="/projects" class="footer-link">Projects</a></li>
                    <li class="mb-2"><a href="/contact" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">Contact Info</h5>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> yohan@email.com</li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Papua Indonesia</li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">Keep in Touch</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your Email">
                    <button class="btn btn-dark" type="button">Send</button>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1)">

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-white-50 mb-0 small">&copy; 2026 Yohan Dev. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>