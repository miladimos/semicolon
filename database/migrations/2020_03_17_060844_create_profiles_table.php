<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('telegram')->unique()->nullable();
            $table->string('twitter')->unique()->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->string('linkedin')->unique()->nullable();
            $table->string('github')->unique()->nullable();
            $table->string('gitlab')->unique()->nullable();
            $table->string('virgol')->unique()->nullable();
            $table->string('medium')->unique()->nullable();
            $table->string('avatar')->unique()->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
