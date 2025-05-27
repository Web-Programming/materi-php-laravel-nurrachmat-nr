<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::create([
            'nama' => 'FIKR',
        ]);
        Prodi::create([
            'nama' => 'Informatika',
            'kode_prodi' => 'IF',
            'fakultas_id' => 1
        ]);
    }
}
