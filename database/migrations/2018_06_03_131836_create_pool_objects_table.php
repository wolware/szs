<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoolObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pool_objects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id');

            $table->integer('number_of_pools')->nullable();
            $table->boolean('water_effects')->nullable();
            $table->integer('water_area')->nullable();
            $table->integer('pool_capacity')->nullable();
            $table->string('wifi')->nullable();
            $table->string('parking')->nullable();
            $table->string('restaurant')->nullable();
            $table->string('cafe')->nullable();
            $table->string('access_to_disabled')->nullable();
            $table->integer('number_of_locker_rooms')->nullable();

            $table->boolean('hot_water_showers')->nullable();
            $table->boolean('equipment_rent')->nullable();
            $table->boolean('kid_pools')->nullable();
            $table->boolean('wardrobe_with_key')->nullable();
            $table->boolean('entering_a_props')->nullable();
            $table->boolean('air_conditioning')->nullable();
            $table->boolean('urine_detector')->nullable();
            $table->boolean('optimum_temperature')->nullable();
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
        Schema::dropIfExists('pool_objects');
    }
}
