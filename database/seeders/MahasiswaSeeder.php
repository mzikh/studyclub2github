<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_mahasiswa')->insert([
            'nim'=>'f1e121001','nama'=>"Yuda",'kelas'=>'R005', 'deskripsi'=>"Panitia Study club"
        ]);
        DB::table('table_mahasiswa')->insert([
            'nim'=>'f1e121002','nama'=>"kodrat",'kelas'=>'R006', 'deskripsi'=>"Pemateri Study club"
        ]);
        DB::table('table_mahasiswa')->insert([
            'nim'=>'f1e121003','nama'=>"fadrul",'kelas'=>'R004', 'deskripsi'=>"Peserta Study club"
        ]);
    }
}
