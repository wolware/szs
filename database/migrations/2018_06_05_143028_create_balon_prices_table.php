<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalonPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balon_prices', function (Blueprint $table) {
            $table->increments('id');

            $table->string('sport');
            $table->string('name');
            $table->decimal('price_per_hour', 8, 2);

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
        Schema::dropIfExists('balon_prices');
    }
}
