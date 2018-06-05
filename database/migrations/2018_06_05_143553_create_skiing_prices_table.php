<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkiingPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skiing_prices', function (Blueprint $table) {
            $table->increments('id');

            $table->string('description');
            $table->decimal('price');
            $table->decimal('price_kids');

            $table->unsignedInteger('skiing_objects_id')->nullable();

            $table->foreign('skiing_objects_id')
                ->references('id')
                ->on('skiing_objects')
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
        Schema::dropIfExists('skiing_prices');
    }
}
