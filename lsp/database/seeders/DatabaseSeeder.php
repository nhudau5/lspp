<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Penduduk;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //Input Data Kategori
         Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'fasilitas'
            ]
        );
        //Input Data Penduduk
        Siswa::create([
            
            'nis' => '20209080',
            'kelas' => 'XII TEL 10',
        ]);
        Siswa::create([
        
            'nis' => '20209090',
            'kelas' => 'XII TEL 10',
        ]);
        // Siswa::create([
        //     'id' => '1506',
        //     'nis' => 'Aulia Huda',
        //     'alamat' => 'Kpg. Baing No. 743, Pekalongan 23758, Jambi',
        //  ]);
        // //Input Data Aspirasi
        //   Aspirasi::create([
        //     'id' => 1,
        //     'id_aspirasi' => 1,
        //     'kategori_id' => 2,
        //     'status' => 'Menunggu',
        // ]);
        // Aspirasi::create([
        //     'id' => 2,
        //     'id_aspirasi' => 2,
        //     'kategori_id' => 3,
        //     'status' => 'Menunggu',
        // ]);
        // //Input Aspirasi
        // Input_aspirasi::create([
        //     'nis' => '20209080',
        //     'kategori_id' => '2',
        //     'lokasi' => 'parkiran',
        //     'ket' => 'kehilangan motor',
        // ]);
        // Input_aspirasi::create([
        //     'nis' => '20208900',
        //     'kategori_id' => '3',
        //     'lokasi' => 'wc',
        //     'ket' => 'wc kotor',
        // ]);
        //input data admin
        Admin::create([
            'username' => 'naufal',
            'password' => bcrypt('123'),
        ]);
    }
}