<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{

    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id');
            $table->morphs('taggable');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('taggables');
    }
}
