<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConSubcatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_subcat', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('con_id')->index();
            $table->foreign('con_id')->references('id')->on('contents')->onDelete('cascade');
            $table->unsignedInteger('sub_cat_id')->index();
            $table->foreign('sub_cat_id')->references('id')->on('sub_categories')->onDelete('cascade');
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
        Schema::dropIfExists('con_subcat');
    }
}
