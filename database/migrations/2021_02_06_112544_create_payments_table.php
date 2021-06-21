<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->unique();
            $table->foreignId('user_id');
            $table->foreignId('course_id')->nullable();
            // $table->morphs('paymentable');
            $table->string('resnumber');
            $table->unsignedBigInteger('amount');
            $table->string('type')->nullable();
            $table->boolean('payment')->default(false);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE');

            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
