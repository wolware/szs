<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalonObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balon_objects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id');

            $table->integer('number_of_fields')->nullable();
            $table->string('type_of_field')->nullable();
            $table->integer('area')->nullable();
            $table->integer('capacity')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('restaurant')->nullable();
            $table->boolean('cafe')->nullable();
            $table->boolean('access_to_disabled')->nullable();
            $table->integer('number_of_locker_rooms')->nullable();

            $table->boolean('hot_water_showers')->nullable();
            $table->boolean('result_board')->nullable();
            $table->boolean('kids_playground')->nullable();
            $table->boolean('wardrobe_with_key')->nullable();
            $table->boolean('props')->nullable();
            $table->boolean('air_conditioning')->nullable();
            $table->boolean('protective_net')->nullable();
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
        Schema::dropIfExists('balon_objects');
    }
}
