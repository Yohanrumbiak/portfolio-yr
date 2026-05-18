@extends('layouts.admin')

@section('content')
<div class="container mt-3 mt-sm-5 pt-4 pt-sm-5">
    <h2 class="text-center mb-3 mb-sm-4 text-white fs-4 fs-sm-2">Dashboard Pesan Masuk</h2>

    <div class="custom-card-wrapper">
        <div class="table-responsive"> 
            <table class="table table-custom text-white mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $index => $message)
                    <tr>
                        <td data-label="No">{{ $index + 1 }}</td>
                        <td data-label="Nama" class="fw-bold">{{ $message->name }}</td>
                        <td data-label="Email">{{ $message->email }}</td>
                        <td data-label="Pesan">{{ $message->message }}</td>
                        <td data-label="Tanggal">{{ $message->created_at->format('d M Y') }}</td>
                        <td data-label="Action">
                            <form action="{{ route('admin.messages.delete', $message->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-light btn-sm rounded-pill px-3 shadow-sm text-dark">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection