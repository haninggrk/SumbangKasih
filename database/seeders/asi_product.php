<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\asi_product;

class asi_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        asi_product::create([
            'picture_product'=>'FOTO',
            'jangka_hari_setelah_melahirkan'=>1000,
            'kuantitas'=>2000,
            'jumlah_liter'=>12000,
            'deskripsi'=>'Deskripsi Aman',
            'bukti_foto_kartu_vaksinasi'=>'ini bukti foto kartu vaksinasi',
            'bukti_foto_terbebas_dari_covid'=>'ini bukti_foto_terbebas_dari_covid',
            'status'=>1
        ]);
    }
}
