<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiumObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stadium_objects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id');

            $table->string('type_of_grass')->nullable();
            $table->integer('stadium_length')->nullable();
            $table->integer('stadium_width')->nullable();
            $table->integer('stadium_capacity')->nullable();
            $table->string('wifi')->nullable();
            $table->string('parking')->nullable();
            $table->string('restaurant')->nullable();
            $table->string('cafe')->nullable();
            $table->string('access_to_disabled')->nullable();
            $table->integer('number_of_locker_rooms')->nullable();

            $table->boolean('hot_water_showers')->nullable();
            $table->boolean('result_board')->nullable();
            $table->boolean('props')->nullable();
            $table->boolean('commenting_cabins')->nullable();
            $table->boolean('speaker_system')->nullable();
            $table->boolean('protective_net')->nullable();
            $table->boolean('fan_shop')->nullable();
            $table->boolean('video_surveillance')->nullable();

            $table->unsignedInteger('object_type_id');

            $table->primary('id');

            $table->foreign('id')
                ->references('id')
                ->on('objects')
                ->onDelete('cascade');

            $table->foreign('object_type_id')
                ->references('object_type_id')
                ->on('objects')
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
        Schema::dropIfExists('stadium_objects');
    }
}
