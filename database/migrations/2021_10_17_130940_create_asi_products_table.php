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
            $table->text('days_after_birth');
            $table->integer('quantity');
            $table->double('litre_quantity')->nullable();
            $table->longText('description')->nullable();
            $table->text('vaccinated_proof');
            $table->text('covid_free_proof')->nullable();
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
