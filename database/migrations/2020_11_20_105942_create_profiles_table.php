<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{

    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique()->index();
            $table->foreignId('user_id');
            $table->string('avatar')->nullable();
            $table->string('banner')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('bio')->nullable();
            $table->char('gender')->default('u');
            $table->string('site')->nullable();
            $table->string('github')->nullable();
            $table->string('gitlab')->nullable();
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
