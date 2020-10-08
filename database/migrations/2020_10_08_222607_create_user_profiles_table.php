<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('age')->nullable();
            $table->mediumText('bio')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('telegram')->unique()->nullable();
            $table->string('instagram')->unique()->nullable();
            $table->string('youtube')->unique()->nullable();
            $table->string('site')->unique()->nullable();
            $table->string('twitter')->unique()->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->string('linkedin')->unique()->nullable();
            $table->string('github')->unique()->nullable();
            $table->string('gitlab')->unique()->nullable();
            $table->string('virgol')->unique()->nullable();
            $table->string('atbox')->unique()->nullable();
            $table->string('medium')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->enum('gender', [0,1,2])->defaule(0);
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
        Schema::dropIfExists('user_profiles');
    }
}
