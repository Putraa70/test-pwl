<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel  = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // READ
    public function index()
    {
        $users = $this->userModel->with('kelas')->get();
        return view('Users.list', compact('users')); // <- ganti ke Users.list
    }

    // CREATE FORM
    public function create()
    {
        $kelas = $this->kelasModel->all();
        return view('Users.create', compact('kelas'));
    }

    // STORE DATA
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:100',
            'npm'      => 'required|string|max:20|unique:users,npm',
            'kelas_id' => 'nullable|exists:kelas,id'
        ]);

        $this->userModel->create($request->all());
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    // EDIT FORM
    public function edit($id)
    {
        $user  = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->all();
        return view('Users.edit', compact('user', 'kelas'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $user = $this->userModel->findOrFail($id);

        $request->validate([
            'nama'     => 'required|string|max:100',
            'npm'      => 'required|string|max:20|unique:users,npm,' . $id,
            'kelas_id' => 'nullable|exists:kelas,id'
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User berhasil diupdate!');
    }

    // DELETE DATA
    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}
