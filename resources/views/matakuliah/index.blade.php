@extends('layouts.app')

@section('content')
    <h3>Daftar Mata Kuliah</h3>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-success mb-3">+ Tambah Mata Kuliah</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th class="text-nowrap">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $mk)
            <tr>
                <td class="text-monospace">{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus mata kuliah ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="4" class="text-center text-muted">Belum ada data</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
