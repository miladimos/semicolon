<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivationCodesTable extends Migration
{

    public function up()
    {
        Schema::create('activation_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->char('type')->default('p');
            $table->unsignedInteger('code');
            $table->timestamp('expired_at');
            $table->unique(['user_id', 'code']);

            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activation_codes');
    }
}
