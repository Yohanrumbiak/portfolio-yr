@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold">Contact Me</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control"  placeholder="Masukkan nama lengkap Anda" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="Masukkan alamat email Anda " value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Pesan</label>
                            <textarea name="message" class="form-control"  placeholder="Silahkan tuliskan pesan Anda" rows="4">{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-dark w-100">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection