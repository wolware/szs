<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurrentClubAndCompetitionToPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function (Blueprint $table){
            $table->engine = 'InnoDB';
           $table->string('current_club')->nullable();
           $table->string('competition')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function (Blueprint $table){
            $table->dropColumn('current_club');
            $table->dropColumn('competition');
        });
    }
}
