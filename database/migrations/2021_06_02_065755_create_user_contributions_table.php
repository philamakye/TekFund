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
            $table->integer('user_contribution_id')->unique();
            $table->integer('contributed_user_id');
           // $table->date('contri_date');
            //$table->string('cont_compaign_title');
            $table->integer('contributed_amount');
            $table->boolean('visibility')->default(false)->change();
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
