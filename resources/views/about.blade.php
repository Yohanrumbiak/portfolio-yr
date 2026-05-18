@extends('layouts.app')

@section('title', 'About Me')

@section('content')

 <!-- SKILLS -->
<section class="section container text-center">
    <h2 class="mb-4">About Me</h2>
    <p>
        Saya adalah developer yang fokus membangun aplikasi web menggunakan Laravel
        dengan struktur yang rapi dan profesional.
    </p>
    <h2 class="mb-5 text-center">Skills</h2>
        <div class="row justify-content-center text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-circle" style="--percentage: 90;"
                data-skill="Laravel"
                data-start="januari 2023"
                data-end="sekarang" 
                data-logo="{{ asset('images/laravel.png') }}"
                data-detail="Saya telah menguasai Laravel selama lebih dari 1 tahun, dengan pengalaman membangun berbagai aplikasi web yang kompleks dan efisien.">
                    <span>90%</span>
                </div>
                <h5 class="mt-3">Laravel</h5>
            </div>
            
            
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-circle" style="--percentage: 80;"
                 data-skill="PHP" 
                 data-start="2022" 
                 data-end="Sekarang" 
                 data-logo="{{ asset('images/php.png')}}" 
                 data-detail="Mengembangkan logika server-side yang kuat.">
                    <span>80%</span>
                </div>
                <h5 class="mt-3">PHP</h5>
            </div>
            
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-circle" style="--percentage: 75;"
                data-skill="MySQL">
                    <span>75%</span>
                </div>
                <h5 class="mt-3">MySQL</h5>
            </div>
            
            <div class="col-md-3 col-6 mb-4">
                <div class="skill-circle" style="--percentage: 65;"
                data-skill="Networking Basic">
                    <span>65%</span>
                </div>
                <h5 class="mt-3">Networking Basic</h5>
            </div>
        </div>
    </section>
    
    <!-- ------------------------------ -->
     <div id="skill-modal" class="modal-custom d-none">
        <div class="modal-content-custom">
            <span class="close-modal">&times;</span>
            <div class="text-center">
                <img id="modal-logo" src="" alt="Logo" style="width: 80px; margin-bottom: 20px;">
                <h2 id="modal-title" style="color: #d8b4fe;"></h2>
                <p class="badge bg-primary"><span id="modal-start"></span> - <span id="modal-end"></span></p>
                <hr style="border-color: rgba(255,255,255,0.1)">
                <p id="modal-detail" class="text-white-50" style="line-height: 1.6;"></p>
            </div>
        </div>
    </div>
    <!-- ------------------------------ -->
    @endsection
    
    @push('scripts')
    @vite(['resources/js/about.js'])
@endpush