<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->float('price');
            $table->text('description');
            $table->string('image');
            $table->boolean('gluten_free', 0);
            $table->boolean('vegan', 0);
            $table->boolean('vegetarian', 0);

            $table->unsignedBigInteger('shopping_cart_id')->nullable();
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_cart')->after('id')->onDelete('set null');

            $table->unsignedBigInteger('business_id')->nullable();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('set null');

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
        Schema::dropIfExists('products', function (Blueprint $table) {
            $table->dropForeign('products_shopping_cart_id_foreign');
            $table->dropColumn('shopping_cart_id');

            $table->dropForeign('products_business_id_foreign');
            $table->dropColumn('business_id');
        });
    }
}
