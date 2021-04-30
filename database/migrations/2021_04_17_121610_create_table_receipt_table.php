<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->bigIncrements('rec_id');
            $table->integer('rec_total');
            $table->date('rec_date');
            $table->integer('rec_discount');
            //khóa ngoại
            $table->bigInteger('emp_id')->unsigned();
            $table->foreign('emp_id')->references('emp_id')->on('staff')->onDelete('cascade')->onUpdate('cascade');
            //khóa ngoại
            $table->bigInteger('cus_id')->unsigned();
            $table->foreign('cus_id')->references('cus_id')->on('customer')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('receipt');
    }
}
