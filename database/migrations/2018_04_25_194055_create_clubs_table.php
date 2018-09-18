<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('logo')->default('SZS-club-logo.png');
            $table->string('nature');
            $table->string('city');
            $table->date('established_in');
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('video')->nullable();
            $table->boolean('approved')->default(0);
            $table->boolean('deleted')->default(0);
            $table->unsignedInteger('association_id')->nullable();
            $table->unsignedInteger('club_category_id');
            $table->unsignedInteger('sport_id');
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('number_of_views')->default(0);
            $table->enum('club_type', ['disabled', 'normal'])->default('normal');

            $table->foreign('association_id')
                ->references('id')
                ->on('associations');

            $table->foreign('club_category_id')
                ->references('id')
                ->on('club_categories')
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
        Schema::dropIfExists('clubs');
    }
}
