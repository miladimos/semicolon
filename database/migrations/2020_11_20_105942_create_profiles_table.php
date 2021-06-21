<?php

use App\Enums\Gender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{

    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('avatar')->nullable();
            $table->string('banner')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('bio')->nullable();
            // $table->enum('gender', collect(Gender::class))->default('0');
            $table->string('site')->nullable();
            $table->string('github')->nullable();
            $table->string('gitlab')->nullable();
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twetter')->nullable();
            $table->string('virgorl')->nullable();
            $table->string('atbox')->nullable();
            // $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
