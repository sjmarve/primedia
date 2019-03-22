<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineupItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineup_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('day_id')->unsigned();
            $table->bigInteger('show_id')->unsigned();
            $table->bigInteger('station_id')->unsigned();
            $table->time('start_at');
            $table->time('end_at');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('show_id')->references('id')->on('shows');
            $table->foreign('station_id')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineup_items');
    }
}
