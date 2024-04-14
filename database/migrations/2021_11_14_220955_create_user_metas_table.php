<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_metas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index()->unique();
            $table->morphs('metaable');
            $table->string('last_logout_at')->nullable();
            $table->string('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('last_login_agent')->nullable();
            $table->string('provider')->nullable(); // github
            $table->string('provider_id')->nullable(); // github
            $table->string('provider_token')->nullable(); // github
            $table->string('provider_refresh_token')->nullable(); // github
            $table->timestamp('username_changed_at')->nullable();
            $table->timestamp('email_changed_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_changed_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->boolean('is_banned')->default(0);
            $table->timestamp('banned_at')->nullable();
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
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
        Schema::dropIfExists('user_metas');
    }
}
