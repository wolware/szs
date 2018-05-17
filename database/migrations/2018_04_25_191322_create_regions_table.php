<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->unique();
            $table->unsignedInteger('region_parent')->nullable();
            $table->unsignedInteger('region_type_id');

            $table->foreign('region_parent')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

            $table->foreign('region_type_id')
                ->references('id')
                ->on('region_types')
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
        Schema::dropIfExists('regions');
    }
}
