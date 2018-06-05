<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsInBalonObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balon_objects', function (Blueprint $table) {
            $table->string('wifi')->change();
            $table->string('parking')->change();
            $table->string('restaurant')->change();
            $table->string('cafe')->change();
            $table->string('access_to_disabled')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balon_objects', function (Blueprint $table) {
            $table->boolean('wifi')->change();
            $table->boolean('parking')->change();
            $table->boolean('restaurant')->change();
            $table->boolean('cafe')->change();
            $table->boolean('access_to_disabled')->change();
        });
    }
}
