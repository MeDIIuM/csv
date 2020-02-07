<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReviewController', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('review');
            $table->integer('likes');
            $table->integer('id_user');
            $table->integer('id_product');
            $table->integer('id_rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ReviewController');
    }
}
