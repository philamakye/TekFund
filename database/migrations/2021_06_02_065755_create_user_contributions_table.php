<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contributions', function (Blueprint $table) {
            $table->id();
            $table->integer('campaign_id')->unique();
            $table->string('status')->nullable();
            $table->string('reference')->nullable();
            $table->string('contributor_name')->nullable();
            $table->string('cont_email')->nullable();
            $table->string('transaction_phone_num')->nullable();
           // $table->date('contri_date');
            //$table->string('cont_compaign_title');
            $table->numeric('contributed_amount');
            $table->boolean('visibility')->default(false)->change();
            $table->time('paidAt');
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
        Schema::dropIfExists('user_contributions');
    }
}
