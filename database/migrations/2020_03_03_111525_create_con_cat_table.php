<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_cat', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('con_id')->index();
            $table->foreign('con_id')->references('id')->on('contents')->onDelete('cascade');
            $table->unsignedInteger('cat_id')->index();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('con_cat');
    }
}
