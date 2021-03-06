<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePromotionsTable: khuyến mãi
 */
class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments("id");
            $table->unsignedInteger("store_id");
            $table->unsignedInteger("food_id");
            $table->tinyInteger("is_percent")->default(1);
            $table->float("discount")->default(0);
            $table->float("max_discount")->nullable();
            $table->dateTime("start_time");
            $table->dateTime("end_time")->nullable();
            $table->timestamps();
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
