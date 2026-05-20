@extends('layouts.app')

@section('title', 'My Portfolio')

@section('content')

<section class="hero container text-center">
    <div>
        <br><br>
        <h1 class="display-4 fw-bold">Halo, Saya Yohan Rumbiak seorang programmer Web Developer & IT Support</h1>
        <p class="lead">Laravel Developer | Papua Indonesia</p>
    </div>

    <div class="carousel-container mt-5" style="min-height: 400px;">
        <div class="carousel">
            <ul>
                <li><img src="{{ asset('image/01.jpg') }}" alt="Project 1" style="width:300px;"></li>
                <li><img src="{{ asset('image/02.jpg') }}" alt="Project 2" style="width:300px;"></li>
                <li><img src="{{ asset('image/03.jpg') }}" alt="Project 3" style="width:300px;"></li>
                <li><img src="{{ asset('image/04.jpg') }}" alt="Project 4" style="width:300px;"></li>
                <li><img src="{{ asset('image/05.jpg') }}" alt="Project 5" style="width:300px;"></li>
                <li><img src="{{ asset('image/06.jpg') }}" alt="Project 6" style="width:300px;"></li>
                <li><img src="{{ asset('image/07.jpg') }}" alt="Project 7" style="width:300px;"></li>
                <li><img src="{{ asset('image/08.jpg') }}" alt="Project 8" style="width:300px;"></li>
                <li><img src="{{ asset('image/09.jpg') }}" alt="Project 9" style="width:300px;"></li>
                <li><img src="{{ asset('image/10.jpg') }}" alt="Project 10" style="width:300px;"></li>
            </ul>
        </div>
    </div>

</section>

{{-- Masukkan script inisialisasi di bawah section content --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        // Menunggu seluruh gambar 01-10 selesai didownload browser
        window.addEventListener('load', function() {
            if (typeof jQuery !== 'undefined' && $.fn.flipster) {
                $('.carousel').flipster({
                    style: 'carousel',
                    spacing: -0.3,
                    loop: true,
                    buttons: true
                });
            } else {
                console.warn("Menunggu library Flipster...");
            }
        });
    </script>

@endsection