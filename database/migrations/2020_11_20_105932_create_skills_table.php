<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{

    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->nullable();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->enum('type', ['1', '2', '3'])->nullable(0);
            $table->string('percent');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
