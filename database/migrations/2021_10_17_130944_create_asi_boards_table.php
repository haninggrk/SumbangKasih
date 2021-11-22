<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsiBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asi_boards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asi_product_id')->references('id')->on('asi_products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('receiver_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            // 1 = request | 2 = success | 0 = progress | 3 = failed
            $table->integer('progress')->default(1);

            $table->integer('quantity_request');
            $table->integer('courir_request')->default(0);
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
        Schema::dropIfExists('asi_boards');
    }
}
