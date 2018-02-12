<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cupname');
            $table->string('teams_number');
            $table->dateTime('start_date');
            $table->string('team_type');
            $table->string('first_prize')->nullable();
            $table->string('second_prize')->nullable();
            $table->string('third_prize')->nullable();
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
        Schema::dropIfExists('cup');
    }
}
