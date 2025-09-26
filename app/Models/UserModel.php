<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';   // pakai tabel users
    protected $guarded = ['id'];  // semua kolom bisa diisi kecuali id

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
