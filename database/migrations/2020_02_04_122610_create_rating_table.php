<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rating');
            $table->integer('id_user');
            $table->integer('id_product');
            $table->integer('id_review');
            //$table->foreign('id_user')->references('id')->on('Users');
            //$table->foreign('id_product')->references('id')->on('Products');
            //$table->foreign('id_review')->references('id')->on('Review');
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
        Schema::dropIfExists('Rating');
    }
}
