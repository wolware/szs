<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sport_id');
            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');
            $table->string('creation_year');
            $table->string('place');
            $table->string('alliance');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
            $table->integer('number_of_views')->default(0);
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
        Schema::dropIfExists('sport_details');
    }
}
