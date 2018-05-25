<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRequestedClubToStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table){
            $table->unsignedInteger('requested_club')->nullable();

            $table->foreign('requested_club')
                ->references('id')
                ->on('clubs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table){
            $table->dropForeign('requested_club');
            $table->dropColumn('requested_club');
        });
    }
}
