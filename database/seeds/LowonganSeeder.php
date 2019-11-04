<?php

use Illuminate\Database\Seeder;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lowongan')->insert([
            'nama_perusahaan' => 'Telkom',
            'logo_perusahaan' => 'telkom.png',
            'alamat_perusahaan' => 'jl.telekomunikasi',
            'deskripsi_perusahaan' => 'merupakan perusahaan yang bergerak dalam bidang telekomunikasi',
            'detail_perusahaan' => 'perusahaan yang mempunyai banyak cabang di seluruh indonesia',
            'galery1' => 'logo.png',
            'galery2' => 'perusahaan.png',
            'galery3' => 'kepala.png',
            
        ]);
    }
}
