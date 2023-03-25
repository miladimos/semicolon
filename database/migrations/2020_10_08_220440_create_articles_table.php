<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique()->index();
            $table->foreignId('author_id');
            $table->string('code')->unique()->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->text('bode');
            $table->string('images')->nullable();
            $table->text('thumbnail_path')->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->boolean('isVip')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->integer('status')->default(0);
            $table->boolean('draft')->default(0);
            $table->boolean('pinned')->default(false);
            $table->boolean('active')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('author_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
