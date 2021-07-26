<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('g_name');
            $table->string('g_address');
            $table->string('g_number');
            $table->string('g_email');
            $table->string('r_preference');
            $table->integer('n_days');
            $table->integer('n_occu');
            $table->integer('e_bed');
            $table->string('ci_date');
            $table->integer('p_night');
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
        Schema::dropIfExists('reserves');
    }
}
