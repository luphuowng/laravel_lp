<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('pro_id');
            $table->string('pro_name');
            $table->integer('pro_price');
            $table->text('pro_desc');
            $table->string('pro_img')->nullable();
            //khóa ngoại
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('category')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('product');
    }
}
