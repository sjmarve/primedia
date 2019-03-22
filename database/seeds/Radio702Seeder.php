<?php

use App\LineupItem;
use App\Presenter;
use App\Show;
use Illuminate\Database\Seeder;

class Radio702Seeder extends Seeder
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
        $show1 = factory(Show::class)->create([
              'name' => 'Late Night Talk Monday 702',
              'description' => 'An opportunity to unpack the stories of the day.'
            ]);
        $show1->presenters()->save(factory(Presenter::class)->create());
        LineupItem::create([
          'day_id' => 1, //monday
          'show_id' => $show1->id,
          'station_id' => 2,
          'start_at' => '00:00',
          'end_at' => '04:00',
        ]);

        $show2 = factory(Show::class)->create([
              'name' => 'Early Breakfast with Relebogile Mabotja Monday 702',
              'description' => 'Early morning risers in Gauteng choose to start their weekdays with irrepressible, energetic Relebogile Mabotja.'
            ]);
        $show2->presenters()->save(factory(Presenter::class)->create());
        LineupItem::create([
          'day_id' => 1, //monday
          'show_id' => $show2->id,
          'station_id' => 2,
          'start_at' => '04:00',
          'end_at' => '06:00',
        ]);

        $show3 = factory(Show::class)->create([
              'name' => 'Breakfast with Bongani Bingwa Monday 702',
              'description' => 'Catch up on current events, stay updated on developing stories while also hearing from those newsmakers making headlines.'
            ]);
        $show3->presenters()->save(factory(Presenter::class)->create());
        LineupItem::create([
          'day_id' => 1, //monday
          'show_id' => $show3->id,
          'station_id' => 2,
          'start_at' => '06:00',
          'end_at' => '09:00',
        ]);

        //insert random sensiless data
        for ($i=1; $i < 8; $i++) {
            for ($x=1; $x < 8; $x++) {
                factory(LineupItem::class)->create([
                    'station_id' => 2,
                    'day_id' => $i,
                ]);
            }
        }
    }
}
