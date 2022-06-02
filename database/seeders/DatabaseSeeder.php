<?php

namespace Database\Seeders;

use App\Models\Upload;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 5; $i++) { 
            User::create([
                'name' => $faker->firstName,
                'email' => $faker->unique()->email,
                'password' => bcrypt('rahasia123'),
            ]);
        }

        // Upload::create([
        //     'judul_arsip' => 'Arsip pertama',
        //     'jenis_arsip' => 'aktif',
        //     'no_berkas' => 'ARSP0123',
        //     'pencipta_arsip' => 'Sugan Aya',
        //     'tahun' => 2011,
        //     'filename' => 'berkas.xls',
        //     'user_id' => 1,
        // ]);

        // Upload::create([
        //     'judul_arsip' => 'Arsip kedua',
        //     'jenis_arsip' => 'pasif',
        //     'no_berkas' => 'ARSP999',
        //     'pencipta_arsip' => 'Duka Saha',
        //     'tahun' => 1992,
        //     'filename' => 'berkas_2.xls',
        //     'user_id' => 2,
        // ]);

        // Upload::create([
        //     'judul_arsip' => 'Arsip ketiga',
        //     'jenis_arsip' => 'aktif',
        //     'no_berkas' => 'ARSP2451',
        //     'pencipta_arsip' => 'Si Eta',
        //     'tahun' => 1999,
        //     'filename' => 'berkas_3.xls',
        //     'user_id' => 3,
        // ]);
    }
}
