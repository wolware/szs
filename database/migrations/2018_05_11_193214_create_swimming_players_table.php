<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwimmingPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimming_players', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id');

            $table->string('style')->nullable();
            $table->integer('distance')->nullable();
            $table->string('coach')->nullable();
            $table->string('best_result',50)->nullable();
            $table->string('agent')->nullable();

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
        Schema::dropIfExists('swimming_players');
    }
}
