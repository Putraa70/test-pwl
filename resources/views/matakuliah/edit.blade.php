@extends('layouts.app')


@section('content')
    <h3>Edit Mata Kuliah</h3>
    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama MK</label>
            <input type="text" name="nama_mk" class="form-control" value="{{ $mk->nama_mk }}" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $mk->sks }}" min="1" max="6" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
