<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsiProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asi_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->text('picture_product')->nullable();
            $table->text('jangka_hari_setelah_melahirkan');
            $table->bigInteger('kuantitas');
            $table->bigInteger('jumlah_liter')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->longText('bukti_foto_kartu_vaksinasi');
            $table->longText('bukti_foto_terbebas_dari_covid')->nullable();
            $table->Integer('status');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asi_products');
    }
}
