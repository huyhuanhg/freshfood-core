<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments("id");
            $table->unsignedInteger("store_id");
            $table->unsignedInteger("category_id");
            $table->string('food_name', 200);
            $table->string('food_not_mark', 200);
            $table->tinyInteger('food_active');
            $table->string('food_avatar', 50)->nullable();
            $table->tinyInteger('promotion');
            $table->float("price")->default(0);
            $table->float('food_profit')->default(0);//số tiền lợi nhuận
            $table->integer("food_consume")->default(0); //số lượng tiêu thụ
            $table->text("food_description");
            $table->char("avg_rate", 5);
            $table->timestamps();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
