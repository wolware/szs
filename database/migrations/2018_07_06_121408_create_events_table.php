<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('image', 1000);
            $table->string('name');
            $table->string('city');
            $table->decimal('latitude', 9, 6);
            $table->decimal('longitude', 9, 6);
            $table->date('date_start');
            $table->time('time_start');
            $table->integer('max_participants')->nullable();

            $table->decimal('registration_fee', 8, 2)->nullable();
            $table->decimal('first_place_award', 8, 2)->nullable();
            $table->integer('duration')->nullable();

            $table->string('description', 2000)->nullable();

            $table->unsignedInteger('event_type_id');
            $table->unsignedInteger('sport_id');
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('user_id');

            $table->foreign('event_type_id')
                ->references('id')
                ->on('event_types')
                ->onDelete('cascade');

            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
                ->onDelete('cascade');

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->enum('status', ['waiting', 'active', 'refused', 'deleted'])->default('waiting');

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
        Schema::dropIfExists('events');
    }
}
