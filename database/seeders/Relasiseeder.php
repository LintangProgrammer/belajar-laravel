<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Wali;
use Illuminate\Database\Seeder;

class Relasiseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Lintang Nur wijaya',
            'nim' => '123456',
        ]);
        Wali::create([
            'nama' => 'Pak candra',
             'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
