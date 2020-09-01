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
            $table->string('title')->unique();
            $table->string('title_link')->unique();
            $table->string('description');
            $table->bigInteger('category')->unsigned();
            $table->string('poster');
            $table->string('view_link');
            $table->string('download_link');
            $table->string('size');
            $table->enum('new',['yes','no'])->default('yes');
            $table->enum('active',['yes','no'])->default('yes');
            $table->integer('download_count')->default('1');
            $table->integer('position')->default(1);
            $table->integer('pages')->default(1);
            $table->foreign('category')->on('caters')->references('id');
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
        Schema::dropIfExists('books');
    }
}
