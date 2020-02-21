<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_oder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('oder_id');
            $table->integer('book_id');
            $table->integer('quantity')->comment('số lượng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_oder');
    }
}
