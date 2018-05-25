<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('avatar');
            $table->date('date_of_birth');
            $table->string('city')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('video')->nullable();

            $table->string('education')->nullable();
            $table->string('additional_education')->nullable();
            $table->integer('number_of_certificates')->nullable();
            $table->integer('number_of_projects')->nullable();
            $table->decimal('work_experience', 3, 1)->nullable();
            $table->mediumText('biography')->nullable();
            $table->string('club_name')->nullable();

            $table->unsignedInteger('profession_id');
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('club_id')->nullable();

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

            $table->foreign('club_id')
                ->references('id')
                ->on('clubs')
                ->onDelete('cascade');

            $table->foreign('profession_id')
                ->references('id')
                ->on('professions')
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
        Schema::dropIfExists('staff');
    }
}
