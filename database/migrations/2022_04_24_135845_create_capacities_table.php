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
        Schema::create('capacities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('journey_id')->unsigned()->index();
            $table->bigInteger('level_id')->unsigned()->index();
            $table->integer('capacity')->default(0);
            $table->decimal('price')->default(0);

            $table->foreign('journey_id')->references('id')->on('journeys')
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
        Schema::dropIfExists('capacities');
    }
};
