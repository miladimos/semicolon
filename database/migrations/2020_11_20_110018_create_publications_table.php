<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishersTable extends Migration
{

    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id');
            $table->uuid('uuid')->index()->unique();
            $table->string('username', 120)->unique();
            $table->string('title', 120)->unique();
            $table->string('slug')->unique();
            $table->string('description', 250)->unique();
            $table->string('logo')->unique()->nullable();
            $table->string('banner')->unique()->nullable();
            $table->string('brand_color')->unique()->nullable();
            $table->string('site')->unique()->nullable();
            $table->string('twitter')->unique()->nullable();
            $table->string('telegram')->unique()->nullable();
            $table->string('instagram')->unique()->nullable();
            $table->boolean('is_official')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
