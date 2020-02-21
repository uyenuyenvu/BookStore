<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id');
            $table->timestamps();
            $table->text('customer_name');
            $table->text('customer_phone');
            $table->text('customer_address');
            $table->text('mess')->nullable();
            $table->text('shop_name')->nullable();
            $table->text('shop_phone')->nullable();
            $table->text('shop_address')->nullable();
            $table->integer('total');
            $table->integer('ship_total')->nullable();
            $table->timestamp('time_finish')->nullable()->comment('thời gian giao hàng thành công');
            $table->integer('status')->comment('0 là gửi yêu cầu cho người bán, 1 là người bán đã giao hàng, 2 là ship xong');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oders');
    }
}
