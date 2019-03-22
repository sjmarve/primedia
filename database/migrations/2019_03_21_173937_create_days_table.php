<?php

use App\Day;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        Day::insert([
          ['name' => 'monday'],
          ['name' => 'tuesday'],
          ['name' => 'wednesday'],
          ['name' => 'thursday'],
          ['name' => 'friday'],
          ['name' => 'saturday'],
          ['name' => 'sunday'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
}
