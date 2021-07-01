<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\True_;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           // $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigIncrements('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->string('pro_image')->nullable();
            $table->string('phone_number');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->integer('school_id')->nullable();
            $table->longText('about_me')->nullable();
            $table->longText('shrt_desc')->nullable();
            $table->integer('role');
            $table->integer('campaign_num');
            $table->integer('comments_num');
            $table->integer('contribution_num');
            $table->string('user_facebooklink')->nullable();
            $table->string('user_twitterlink')->nullable();
            $table->string('user_youtubelink')->nullable();
            $table->string('user_imdb')->nullable();
            $table->string('user_websitelink')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
