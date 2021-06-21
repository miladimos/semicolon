<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriablesTable extends Migration
{

    public function up()
    {
        Schema::create('categoriables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->morphs('categoriable');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categoriables');
    }
}
