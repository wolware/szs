<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('avatar');
            $table->date('date_of_birth');
            $table->string('city')->nullable();
            $table->decimal('weight',4, 1)->nullable();
            $table->decimal('height',4, 1)->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('video')->nullable();

            $table->unsignedInteger('region_id');
            $table->unsignedInteger('club_id')->nullable();
            $table->unsignedInteger('player_type_id');

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

            $table->foreign('club_id')
                ->references('id')
                ->on('clubs')
                ->onDelete('cascade');


            $table->foreign('player_type_id')
                ->references('id')
                ->on('player_types')
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
        Schema::dropIfExists('players');
    }
}
