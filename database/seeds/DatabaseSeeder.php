<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
          [ '1' => 'capetalk' ],
          [ '2' => '702' ],
          [ '3' => 'kfm' ],
          [ '4' => '947' ],
        */

        $this->call(Radio702Seeder::class);
        $this->call(Radio947Seeder::class);
        $this->call(CapeTalkSeeder::class);
        $this->call(KFMSeeder::class);

    }
}
