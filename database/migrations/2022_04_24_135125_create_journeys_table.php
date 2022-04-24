<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('from_id')->unsigned()->index();
            $table->bigInteger('to_id')->unsigned()->index();
            $table->bigInteger('level_id')->unsigned()->index();
            $table->bigInteger('airline_id')->unsigned()->index();
            $table->bigInteger('stop_id')->unsigned()->index();
            $table->integer('baggage_fee')->default(0);
            $table->integer('cancellation_fee')->default();
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('price');
            $table->integer('capacity');


            $table->foreign('from_id')->references('id')->on('airports')
            ->onDeleteCascade();
            $table->foreign('to_id')->references('id')->on('airports')
            ->onDeleteCascade();
            $table->foreign('level_id')->references('id')->on('levels')
            ->onDeleteCascade();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
    }
};
