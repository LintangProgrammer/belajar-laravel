<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa =[
        ['nama' =>'udin', 'kelas' => 'satu', 'alamat' =>'bandung', 'jenis_kelamin' =>'laki-laki', 'nis'=>'123' ],
        ['nama' =>'adin', 'kelas' => 'dua', 'alamat' =>'jakarta', 'jenis_kelamin' =>'laki-laki', 'nis'=>'456' ],
        ['nama' =>'idin', 'kelas' => 'tiga', 'alamat' =>'padang', 'jenis_kelamin' =>'perempuan', 'nis'=>'789' ],
        ['nama' =>'didin', 'kelas' => 'empat', 'alamat' =>'medan', 'jenis_kelamin' =>'laki-laki', 'nis'=>'112' ],
        ['nama' =>'dudun', 'kelas' => 'lima', 'alamat' =>'aceh', 'jenis_kelamin' =>'laki-laki', 'nis'=>'221' ]
        ];

        DB::table('siswa')->insert($siswa);
    }
}
