<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{

    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->unique();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('code')->unique();
            $table->string('description')->nullable();
            $table->string('percent')->unique();
            $table->enum('type', ['g', 'u', 'c']);
            $table->tinyInteger('count_use')->nullable();
            $table->boolean('infinity')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('discountables', function (Blueprint $table) {
            $table->foreignId('discount_id')
                ->references('id')->on('discounts')
                ->cascadeOnDelete();
            $table->morphs('discountable');
        });

        // Schema::create('discount_courses', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->foreignId('discount_id');
        //     $table->foreignId('course_id');
        //     $table->timestamps();
        // });

        // Schema::create('category_discount', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->foreignId('discount_id');
        //     $table->foreignId('category_id');
        //     $table->timestamps();
        // });

        // Schema::create('discount_users', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->foreignId('discount_id');
        //     $table->foreignId('users_id');
        //     $table->timestamps();
        // });

    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
