<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->unique();
            $table->foreignId('parent_id')->default(0);
            $table->morphs('commentorable');
            $table->morphs('commentable');
            $table->text('comment');
            $table->boolean('approved')->default(0);
            $table->timestamp('approved_at')->nullable();
            $table->unsignedBigInteger('up_vote_count')->default(0);
            $table->unsignedBigInteger('down_vote_count')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')->on('comments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
