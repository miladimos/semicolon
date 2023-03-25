<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->unique();
            $table->foreignId('author_id');
            $table->foreignId('teacher_id');
            $table->foreignId('type_id');
            $table->foreignId('level_id');
            $table->foreignId('status_id');
            $table->string('title')->unique();
            $table->string('en_title')->unique()->nullable();
            $table->string('slug')->unique();
            $table->string('price')->nullable();
            $table->string('teacher_percent')->nullable();
            $table->text('description')->nullable();
            $table->longText('body')->nullable();
            $table->text('thumbnail_path')->nullable();
            $table->text('images')->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('pinned')->default(0);
            $table->unsignedInteger('view_count')->default(0);
            $table->timestamp('last_update')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->float('priority')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('teacher_id')
                ->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            // $table->foreign('level_id')
            //     ->references('id')->on('course_levels')
            //     ->onUpdate('CASCADE')
            //     ->onDelete('CASCADE');

            // $table->foreign('type_id')
            //     ->references('id')->on('course_types')
            //     ->onUpdate('CASCADE')
            //     ->onDelete('CASCADE');

            // $table->foreign('status_id')
            //     ->references('id')->on('course_statuses')
            //     ->onUpdate('CASCADE')
            //     ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
