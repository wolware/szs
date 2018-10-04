<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePlayerTypesForeignOnPlayers extends Migration
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
            $table->dropForeign(['player_type_id']);

            $table->foreign('player_type_id')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');
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
            $table->dropForeign(['player_type_id']);

            $table->foreign('player_type_id')
                ->references('id')
                ->on('player_types')
                ->onDelete('cascade');
        });
    }
}
