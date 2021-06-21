<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{

    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('code')->unique();
            $table->foreignId('admin_id')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->foreignId('subject_id')->nullable();
            $table->foreignId('status_id')->default(1);
            $table->foreignId('priority_id')->nullable();
            $table->string('title')->nullable();
            $table->text('body');
            $table->text('file')->nullable();
            $table->morphs('ticketable');
            $table->boolean('done')->default(false);
            $table->timestamp('done_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('admin_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('subject_id')
                ->references('id')->on('ticket_subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('status_id')
                ->references('id')->on('ticket_statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('priority_id')
                ->references('id')->on('ticket_priorities')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('parent_id')
            //     ->references('id')->on('tickets')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
