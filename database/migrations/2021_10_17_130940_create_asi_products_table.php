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
            $table->foreignId('receiver_id')->references('id')->on('users')->nullable();
            $table->text('product_picture')->nullable();
            $table->dateTime('tanggal_melahirkan');
            $table->integer('quantity');
            $table->double('liter_per_pack');
            $table->text('description')->nullable();

            $table->integer('courir_pemilik');
            // $table->text('detail_address_get');
            $table->text('bukti_foto_covid-19');
            // 1 = diterima | 2 = ditolak | 0 = menunggu
            $table->integer('status_persetujuan')->default(0);
            // 1 = request | 2 = success | 0 = progress | 3 = failed
            $table->integer('progress')->default(0);
            $table->integer('courir_request')->nullable();
            $table->string('detail_address_resipien')->nullable();
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
