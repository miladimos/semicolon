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
            $table->uuid('uuid')->unique()->index();
            $table->foreignId('user_id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->unsignedTinyInteger('age')->nullable();
            $table->string('bio', 250)->nullable();
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
            $table->enum('gender', ['n', 'f', 'm'])->default('n'); // n = unknown, f = female, m = male
            $table->timestamp('birthday')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
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
