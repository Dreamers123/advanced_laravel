<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('total_seats');
            $table->integer('available_seats');
            $table->boolean('active')->default(false);
            $table->timestamp('departure_time')->nullable();
            $table->integer('prize');
            $table->string('destination');
            $table->timestamp('arrival_time')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
