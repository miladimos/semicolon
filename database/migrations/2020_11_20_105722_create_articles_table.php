<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->foreignId('author_id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('body')->nullable();
            $table->text('thumbnail_path')->nullable();
            $table->text('images')->nullable();
            $table->integer('status')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->boolean('draft')->default(0);
            $table->unsignedInteger('viewCount')->default(0);
            $table->boolean('pinned')->default(false);
            $table->boolean('active')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
