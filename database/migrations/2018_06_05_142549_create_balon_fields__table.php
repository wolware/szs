<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalonFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balon_fields', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('sports');
            $table->string('type_of_field');
            $table->integer('capacity')->nullable();
            $table->integer('public_capacity')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();

            $table->unsignedInteger('balon_objects_id')->nullable();

            $table->foreign('balon_objects_id')
                ->references('id')
                ->on('balon_objects')
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
        Schema::dropIfExists('balon_fields');
    }
}
