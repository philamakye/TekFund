<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->string('campaign_id');
            $table->char('status');
            $table->string('campagn_type')->nullable();
            $table->string('starter');
            $table->string('benefactor');
            $table->string('title');
            $table->integer('target');
            $table->boolean('target_flexibility')->default(true)->change();
            $table->integer('duration');
            $table->longText('story')->nullable();
            $table->string('full_name')->nullable();
            $table->string('hospital_name');
            $table->string('doctors_report');
            $table->string('business_cate')->nullable();
            $table->string('project_field')->nullable();
            $table->string('project_plan')->nullable();
            $table->string('cause')->nullable();
            $table->string('prototype')->nullable();
            $table->string('camp_youtubelink')->nullable();
            //$table->string('reference_1');
            //$table->string('reference_2');
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
        Schema::dropIfExists('campaigns');
    }
}
