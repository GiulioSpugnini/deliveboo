<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_info_id')->nullable();
            $table->foreign('user_info_id')->references('id')->on('user_infos')->onDelete('set null');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');

            $table->string('name');
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('address');
            $table->string('city');
            $table->char('cap', 5);
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
        Schema::dropIfExists('businesses', function (Blueprint $table) {
            $table->dropForeign('businesses_user_info_id_foreign');
            $table->dropColumn('user_info_id');

            $table->dropForeign('businesses_category_id_foreign');
            $table->dropColumn('category_id');

            $table->dropForeign('businesses_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
}
