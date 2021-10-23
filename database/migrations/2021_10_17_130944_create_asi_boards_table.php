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
            $table->foreignId('asi_product_id')->references('id')->on('asi_products');
            $table->foreignId('receiver_id')->nullable()->references('id')->on('users');
            $table->integer('status');
            $table->integer('courir');
            $table->string('detail_address_resipien');
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
