<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Support\Facades\DB;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            //$table->increments('campaign_id');
            $table->char('status');
            $table->string('campaign_type')->nullable();
            $table->string('starter')->nullable();
            $table->string('benefactor')->nullable();
            $table->string('title');
            $table->integer('target');
            $table->boolean('target_flexibility')->default(true)->change();
            $table->integer('duration');
            $table->string('cover_img')->nullable();
            $table->longText('story')->nullable();
            $table->string('full_name')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('doctors_report')->nullable();
            $table->string('business_cate')->nullable();
            $table->string('project_field')->nullable();
            $table->string('project_plan')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_plan')->nullable();
            $table->string('cause')->nullable();
            $table->string('prototype')->nullable();
            $table->string('camp_youtubelink')->nullable();
            $table->unsignedBigInteger('us_id')->nullable();
            $table->foreign('us_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('reference_1')->nullable();
            $table->string('reference_2')->nullable();
            $table->timestamps();
        });

        //DB::statement("ALTER TABLE campaigns AUTO_INCREMENT = 1000;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
