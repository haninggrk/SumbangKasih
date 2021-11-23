<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Penyintas Covid-19',
            'photo' => 'penyintas-covid',
            'show' => 1 === rand(1, 2),
            'description' => 'Kategori masyarakat yang mendapatkan hambatan atau kesusahan ekonomi akibat derita Covid-19',
        ]);
        Category::create([
            'name' => 'Ibu Kepala Rumah Tangga',
            'photo' => 'ibu-kepala-rumah-tangga',
            'show' => 1 === rand(1, 2),
            'description' => 'Kategori bagi perempuan yang menjadi tulang punggung keluarga untuk memberi nafkah',
        ]);
        Category::create([
            'name' => 'Pelajar/Mahasiswa',
            'photo' => 'pelajar-mahasiswa',
            'show' => 1 === rand(1, 2),
            'description' => 'Kategori bagi mahasiswa/pelajar yang mengalami hambatan atau kesusahan dalam ekonomi',
        ]);
        Category::create([
            'name' => 'Tenaga Kesehatan',
            'photo' => 'tenaga-kesehatan',
            'show' => 1 === rand(1, 2),
            'description' => 'Kategori yang dikhususkan bagi tenaga kesehatan perempuan yang mempunyai tugas untuk merawat pasien penyintas Covid-19.',
        ]);
        Category::create([
            'name' => 'Orang Jalanan/Pinggiran',
            'photo' => 'orang-jalanan',
            'show' => 1 === rand(1, 2),
            'description' => 'Kategori masyarakat yang sedang membutuhkan bantuan akan tetapi tidak mempunyai perangkat yang memadai agar dapat memperoleh sumbangan dari aplikasi Sumbang Asih',
        ]);
    }
}
