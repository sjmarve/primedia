<?php

use App\LineupItem;
use Illuminate\Database\Seeder;

class CapeTalkSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
        //insert random sensiless data
        for ($i=1; $i < 8; $i++) {
            for ($x=1; $x < 8; $x++) {
                factory(LineupItem::class)->create([
                    'station_id' => 1,
                    'day_id' => $i,
                ]);
            }
        }
    }
}
