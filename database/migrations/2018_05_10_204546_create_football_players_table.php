<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootballPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_players', function (Blueprint $table) {
            $table->unsignedInteger('id');

            $table->string('preferred_leg')->nullable();
            $table->string('position')->nullable();
            $table->string('agent')->nullable();
            $table->bigInteger('market_value')->nullable();

            $table->unsignedInteger('player_type_id');

            $table->primary('id');

            $table->foreign('id')
                ->references('id')
                ->on('players')
                ->onDelete('cascade');

            $table->foreign('player_type_id')
                ->references('player_type_id')
                ->on('players')
                ->onDelete('cascade');

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
        Schema::dropIfExists('football_players');
    }
}
