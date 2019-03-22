<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresenterShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presenter_show', function (Blueprint $table) {
            $table->bigInteger('presenter_id')->unsigned();
            $table->bigInteger('show_id')->unsigned();

            $table->foreign('show_id')->references('id')->on('shows');
            $table->foreign('presenter_id')->references('id')->on('presenters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presenter_show');
    }
}
