<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddObjectIdToGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galeries', function (Blueprint $table){
            $table->unsignedInteger('object_id')->nullable();

            $table->foreign('object_id')
                ->references('id')
                ->on('objects')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galeries', function (Blueprint $table){
            $table->dropForeign('object_id');
            $table->dropColumn('object_id');
        });
    }
}
