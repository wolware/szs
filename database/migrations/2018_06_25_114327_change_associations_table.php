<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('associations', function (Blueprint $table){
           $table->date('established_in')->nullable();
           $table->mediumText('description')->nullable();
           $table->string('image');
           $table->string('president')->nullable();
           $table->string('vice_president')->nullable();
           $table->unsignedInteger('sport_id');

           $table->foreign('sport_id')
               ->references('id')
               ->on('sports')
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
        Schema::table('associations', function (Blueprint $table){
            $table->dropColumn('established_in');
            $table->dropColumn('description');
            $table->dropColumn('image');
            $table->dropColumn('president');
            $table->dropColumn('vice_president');

            $table->dropForeign('sport_id');
            $table->dropColumn('sport_id');
        });
    }
}
