<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSchoolIdToTorphiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trophies', function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->unsignedInteger('school_id')->nullable();

            $table->foreign('school_id')
                ->references('id')
                ->on('schools')
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
        Schema::table('trophies', function (Blueprint $table){
            $table->dropForeign('school_id');
            $table->dropColumn('school_id');
        });
    }
}
