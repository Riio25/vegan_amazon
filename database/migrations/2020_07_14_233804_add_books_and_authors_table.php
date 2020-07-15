<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBooksAndAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('books', function (Blueprint $table){
           $table->id();
           $table->foreignId('author_id');
           $table->string('title');
           $table->foreignId('genre_id');
           $table->integer('price');
        });

        schema::create('authors', function (Blueprint $table){
           $table->id();
           $table->string('author');
        });

        schema::create('genres', function (Blueprint $table){
           $table->id();
           $table->string('genre');
           $table->string('genre_abbv');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('books');
        schema::drop('authors');
        schema::drop('genres');
    }
}
