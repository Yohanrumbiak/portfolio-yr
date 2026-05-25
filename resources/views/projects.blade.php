@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<!-- PROJECTS -->
<section class="section container text-center">
    <h2 class="mb-5">My Projects</h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Sistem Absensi QR Code</h5>
                <p>Aplikasi absensi guru mengunakan QR Code berbasis Laravel v10 dengan fitur laporan dan grafik keterlambatan guru yang sering terlambat.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Website Tour & Travel</h5>
                <p>Website pemesanan paket wisata dan event dengan fitur rating dan booking.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Sistem SAW Seleksi Mahasiswa</h5>
                <p>Sistem pendukung keputusan menggunakan metode SAW berbasis Codigniter4.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Website Portfolio</h5>
                <p>Saya juga telah membagun/mengembangkan lebih dari 1 website portfolio yang menampilkan profile saya dan project-project nyata yang pernah saya buat.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Project PHP-CRUD</h5>
                <p>Project yang menampilkan fungsi Create, Read, Update, dan Delete menggunakan bahasa pemrograman PHP.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Fitur Image Animation</h5>
                <p>Saya juga berhasil membuat fitur animasi gambar pada website portfolio.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>

    </div>
</section> 

@endsection
@push('scripts')
    {{-- Pastikan nama filenya project.js (dengan s) sesuai lampiranmu --}}
    @vite('resources/js/project.js') 
@endpush