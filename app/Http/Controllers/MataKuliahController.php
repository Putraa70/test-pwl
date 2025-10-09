<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliah::latest()->get();
        return view('matakuliah.index', compact('data'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks'     => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create($request->only('nama_mk', 'sks'));
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah ditambahkan.');
    }

    public function edit(MataKuliah $matakuliah)
    {
        return view('matakuliah.edit', ['mk' => $matakuliah]);
    }

    public function update(Request $request, MataKuliah $matakuliah)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks'     => 'required|integer|min:1|max:6',
        ]);

        $matakuliah->update($request->only('nama_mk', 'sks'));
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah diperbarui.');
    }

    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();
        return back()->with('success', 'Mata kuliah dihapus.');
    }
}
