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
            $table->foreignId('publication_id')->nullable();
            $table->foreignId('author_id');
            $table->foreignId('category_id');
            $table->string('code')->unique()->nullable();
            $table->string('title', 255)->unique();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->text('body');
            $table->text('thumbnail_path')->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->char('publish_status', 1)->default('d');
            $table->timestamp('published_at')->nullable();
            $table->boolean('pinned')->default(false);
            // $table->drafts();
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
