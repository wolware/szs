<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShootingObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shooting_objects', function (Blueprint $table) {
            $table->unsignedInteger('id');

            $table->integer('number_of_shooting_places')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('wifi')->nullable();
            $table->string('parking')->nullable();
            $table->string('restaurant')->nullable();
            $table->string('cafe')->nullable();
            $table->string('access_to_disabled')->nullable();
            $table->integer('number_of_locker_rooms')->nullable();

            $table->boolean('equipment_rent')->nullable();
            $table->boolean('use_own_equipment')->nullable();
            $table->boolean('equipment_service')->nullable();
            $table->boolean('shooting_school')->nullable();
            $table->boolean('wardrobe_with_key')->nullable();
            $table->boolean('air_conditioning')->nullable();
            $table->boolean('protective_equipment')->nullable();
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
        Schema::dropIfExists('shooting_objects');
    }
}
