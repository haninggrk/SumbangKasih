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
            $table->text('product_picture')->nullable();
            $table->dateTime('tanggal_melahirkan');
            $table->integer('quantity');
            $table->double('liter_per_pack')->nullable();
            $table->Text('description')->nullable();
            $table->int('courir');
            $table->string('city');
            $table->string('provinsi');
            $table->text('detail_address_get');
            $table->text('bukti_foto_covid-19');
            // 1 = diterima | 2 = ditolak | 0 = menunggu
            $table->integer('status');
            $table->timestamps();
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
