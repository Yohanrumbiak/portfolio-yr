@extends('layouts.app')

@section('title', 'About Me')

@section('content')

 <!-- SKILLS -->
        <section class="section container text-center">
            <h2 class="mb-4">About Me</h2>
            <p>
                Saya adalah developer yang fokus membangun aplikasi web menggunakan Laravel
                dengan struktur yang rapi dan profesional. Saya juga memiliki beberapa skil terkait dunia  Teknologi Informasi (IT), seperti Jaringan Komputer, Pemrograman web, Database, Devops, dan Perangkat Fisik Komputer (Hardware). Saya selalu berusaha untuk terus belajar dan mengembangkan diri dalam bidang IT, sehingga saya dapat memberikan solusi terbaik untuk setiap proyek yang saya kerjakan.
            </p>
            <br><br>
            <h2 class="mb-5 text-center">Skills</h2>
                <div class="row justify-content-center text-center">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 90;"
                        data-skill="Laravel"
                        data-start="januari 2023"
                        data-end="sekarang" 
                        data-logo="{{ asset('images/logo_laravel-removebg-preview.png') }}"
                        data-detail="Saya telah menguasai Laravel selama lebih dari 1 tahun, dengan pengalaman membangun berbagai aplikasi web yang kompleks dan efisien.">
                            <span>90%</span>
                        </div>
                        <h5 class="mt-3">Framework Laravel</h5>
                    </div>
                    
            
                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 80;"
                        data-skill="PHP" 
                        data-start="2022" 
                        data-end="Sekarang" 
                        data-logo="{{ asset('images/PHP-logo.svg-removebg-preview.png') }}" 
                        data-detail="Familiar dalam mengembangkan logika server-side yang kuat mengunakan bahasa pemrograman PHP.">
                            <span>80%</span>
                        </div>
                        <h5 class="mt-3">PHP</h5>
                    </div>
            
                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 80;"
                        data-skill="HTML" 
                        data-start="2022" 
                        data-end="Sekarang" 
                        data-logo="{{ asset('images/logo_html-removebg-preview.png') }}" 
                        data-detail="Familiar dalam menggunakan HTML untuk membuat struktur dasar halaman web yang responsif dan semantik.">
                            <span>95%</span>
                        </div>
                        <h5 class="mt-3">HTML</h5>
                    </div>
            
                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 80;"
                        data-skill="CSS" 
                        data-start="2022" 
                        data-end="Sekarang" 
                        data-logo="{{ asset('images/logo_css-removebg-preview.png') }}" 
                        data-detail="Familiar dalam menggunakan CSS untuk membuat tampilan halaman web yang menarik dan responsif.">
                            <span>85%</span>
                        </div>
                        <h5 class="mt-3">CSS</h5>
                    </div>

                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 80;"
                        data-skill="JavaScript" 
                        data-start="2022" 
                        data-end="Sekarang" 
                        data-logo="{{ asset('images/logo_javascript-removebg-preview.png') }}" 
                        data-detail="Familiar dalam menggunakan JavaScript untuk membuat interaksi, fitur dan fungsionalitas di halaman web.">
                            <span>75%</span>
                        </div>
                        <h5 class="mt-3">JavaScript</h5>
                    </div>
                
                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 75;"
                        data-skill="MySQL"
                        data-start="2023"
                        data-end="Sekarang"
                        data-logo="{{ asset('images/logo_Mysql-removebg-preview.png') }}"
                        data-detail="Familiar dalam mengunakan database MySQL">
                            <span>78%</span>
                        </div>
                        <h5 class="mt-3">MySQL</h5>
                    </div>
                
                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 65;"
                        data-skill="Networking Basic"
                        data-start="2021"
                        data-end="Sekarang"
                        data-logo="{{ asset('images/networking.png') }}"
                        data-detail="Memahami dasar-dasar jaringan komputer">
                            <span>70%</span>
                        </div>
                        <h5 class="mt-3">Networking Basic</h5>
                    </div>

                    <div class="col-md-3 col-6 mb-4">
                        <div class="skill-circle" style="--percentage: 65;"
                        data-skill="Web Server Laragon"
                        data-start="2026"
                        data-end="Sekarang"
                        data-logo="{{ asset('images/networking.png') }}"
                        data-detail="Familiar dalam menggunakan web server Laragon untuk pengembangan aplikasi web secara lokal.">
                            <span>60%</span>
                        </div>
                        <h5 class="mt-3">Web Server Laragon</h5>
                    </div>
                 </div>
        </section>
    
    <!-- ------------------------------ -->
     <div id="skill-modal" class="modal-custom d-none">
        <div class="modal-content-custom">
            <span class="close-modal">&times;</span>
            <div class="text-center">
                <img id="modal-logo" src="" alt="Logo" style="width: 200px; margin-bottom: 20px;">
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