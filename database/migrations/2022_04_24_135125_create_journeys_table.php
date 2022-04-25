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
            $table->bigInteger('airline_id')->unsigned()->index();
            $table->bigInteger('stop_id')->unsigned()->index();
            $table->decimal('baggage_fee')->default(0)->nullable();
            $table->decimal('cancellation_fee')->default(0)->nullable();
            $table->dateTime('departure');
            $table->dateTime('arrival');



            $table->foreign('from_id')->references('id')->on('airports')
            ->onDeleteCascade();
            $table->foreign('to_id')->references('id')->on('airports')
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
