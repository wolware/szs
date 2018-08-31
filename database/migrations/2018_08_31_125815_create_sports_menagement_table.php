<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsMenagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_menagement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fName');
            $table->string('lName');
            $table->string('dob');
            $table->string('description');
            $table->string('img');
            $table->unsignedInteger('sport_id');
            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
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
        Schema::dropIfExists('sports_menagement');
    }
}
