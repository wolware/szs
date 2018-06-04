<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkiingObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skiing_objects', function (Blueprint $table) {
            $table->unsignedInteger('id');

            $table->integer('elevation')->nullable();
            $table->integer('number_of_ski_tracks')->nullable();
            $table->integer('number_of_ski_lifts')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('wifi')->nullable();
            $table->string('parking')->nullable();
            $table->string('hotels')->nullable();
            $table->string('cafe')->nullable();
            $table->string('restaurant')->nullable();
            $table->integer('rent_equipment')->nullable();

            $table->boolean('maintenance_service')->nullable();
            $table->boolean('emergency_intervention')->nullable();
            $table->boolean('skiing_school')->nullable();
            $table->boolean('snowboarding_school')->nullable();
            $table->boolean('skiing_equipment_shops')->nullable();
            $table->boolean('mobile_rescue_team')->nullable();
            $table->boolean('night_skiing')->nullable();
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
        Schema::dropIfExists('skiing_objects');
    }
}
