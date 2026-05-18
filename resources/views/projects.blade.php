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
                <p>Aplikasi absensi guru berbasis Laravel dengan fitur laporan dan grafik keterlambatan.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Sistem SAW Seleksi Mahasiswa</h5>
                <p>Sistem pendukung keputusan menggunakan metode SAW berbasis Laravel.</p>
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
                <h5>Sistem Absensi QR Code</h5>
                <p>Aplikasi absensi guru berbasis Laravel dengan fitur laporan dan grafik keterlambatan.</p>
                <a href="#" class="btn btn-outline-light btn-sm">View Project</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 h-100 shadow project-card text-light">
                <h5>Sistem SAW Seleksi Mahasiswa</h5>
                <p>Sistem pendukung keputusan menggunakan metode SAW berbasis Laravel.</p>
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

    </div>
</section> 

@endsection
@push('scripts')
    {{-- Pastikan nama filenya project.js (tanpa s) sesuai lampiranmu --}}
    @vite('resources/js/project.js') 
@endpush