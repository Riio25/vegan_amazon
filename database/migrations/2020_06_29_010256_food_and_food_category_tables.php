<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodAndFoodCategoryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::drop('food_category');
        schema::create('food', function (Blueprint $table){
            $table->id();
            $table->string('category');
            $table->string('color');
            $table->string('item');
            $table->decimal('price');
            $table->timestamps();
        });
        schema::create('food_category', function(Blueprint $table){
            $table->id();
            $table->string('category');
            $table->timestamps();
        });
        schema::create('food_color', function(Blueprint $table){
            $table->id();
            $table->string('color');
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
        schema::create('food_category', function (Blueprint $table){
            $table->id();
            $table->string('product_name');
            $table->integer('price');
            $table->string('product_description');
        });

        schema::drop('food');
        schema::drop('food_category');
        schema::drop('food_color');
    }
}
