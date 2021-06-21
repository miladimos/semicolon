<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->unique();
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->string('name')->unique();
            $table->string('en_name')->nullable()->unique();
            $table->string('slug')->unique();
            $table->string('en_slug')->unique();
            $table->string('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();

            $table->foreign('parent_id')->on('categories')->references('id')->onDelete("SET NULL");
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
