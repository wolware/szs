<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkiingTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skiing_tracks', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('level');
            $table->decimal('length')->nullable();
            $table->decimal('time')->nullable();
            $table->decimal('start_point')->nullable();
            $table->decimal('end_point')->nullable();

            $table->unsignedInteger('skiing_objects_id')->nullable();

            $table->foreign('skiing_objects_id')
                ->references('id')
                ->on('skiing_objects')
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
        Schema::dropIfExists('skiing_tracks');
    }
}
