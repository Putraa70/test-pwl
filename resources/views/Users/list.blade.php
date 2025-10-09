@extends('layouts.app')

@section('content')
<<<<<<< HEAD
=======

>>>>>>> addf508 (Selesai Langkah Praktikum Modul 5)
    <h3>Daftar User</h3>
    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">+ Tambah User</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $loop->iteration }}</td> 
                <td>{{ $u->nama }}</td>
                <td>{{ $u->npm }}</td>
                <td>{{ $u->kelas->nama_kelas ?? '-' }}</td>
                <td>
                    <a href="{{ route('users.edit', $u->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('users.destroy', $u->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<<<<<<< HEAD
=======

>>>>>>> addf508 (Selesai Langkah Praktikum Modul 5)
@endsection
