<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['nama_kelas' => 'Kelas A', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'Kelas B', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'Kelas C', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'Kelas D', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
