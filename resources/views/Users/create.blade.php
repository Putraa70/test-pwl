@extends('layouts.app')
@section('content')
<<<<<<< HEAD
=======

>>>>>>> addf508 (Selesai Langkah Praktikum Modul 5)
    <h3>Tambah User</h3>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control">
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas_id" class="form-select">
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
