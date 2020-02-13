<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('publisher')->comment('nhà xuất bản');
            $table->string('author');
            $table->integer('origin_price');
            $table->integer('sale_price');
            $table->text('content');
            $table->integer('user_id')->nullable();
            $table->integer('category_id');
            $table->timestamp('deleteds_at')->nullable();
            $table->text('slug');
            $table->integer('number_publish');
            $table->boolean('status');
            $table->integer('publisher_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->text('description');
            $table->text('cover_type')->comment('loại bìa');
            $table->integer('number_pages');
            $table->text('size')->comment('kích thước');
            $table->text('supplier')->comment('nhà cung cấp');
            $table->integer('supplier_id')->nullable();
            $table->integer('number_import')->comment('số lượng nhập về');
            $table->integer('number_sold')->comment('số lượng đã bán');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
