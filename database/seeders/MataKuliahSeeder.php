<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliah')->insert([
            [
                'nama_mk' => 'Pemrograman Web Lanjut',
                'sks'     => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mk' => 'Basis Data',
                'sks'     => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mk' => 'Kewirusahaan',
                'sks'     => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
