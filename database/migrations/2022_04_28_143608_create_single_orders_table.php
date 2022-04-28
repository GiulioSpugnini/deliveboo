<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_total_id')->nullable();
            $table->foreign('order_total_id')->references('id')->on('order_totals')->onDelete('set null');

            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
            $table->integer('quantity');
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
        Schema::dropIfExists('single_orders', function (Blueprint $table) {
            $table->dropForeign('single_orders_order_total_id_foreign');
            $table->dropColumn('order_total_id');

            $table->dropForeign('single_orders_product_id_foreign');
            $table->dropColumn('product_id');
        });
    }
}
