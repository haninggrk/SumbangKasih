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
            $table->dateTime('recieve_at');
            $table->dateTime('keep_at');
            $table->dateTime('status');
            $table->string('location');
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
