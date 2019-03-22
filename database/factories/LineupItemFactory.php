<?php

use Faker\Generator as Faker;

$factory->define(App\LineupItem::class, function (Faker $faker) {
    $intervals = ["00", "30"];
    return [
      'day_id' => rand(1,7),
      'show_id' => function(){
        $show = factory(App\Show::class)->create();
        $show->presenters()->save(factory(App\Presenter::class)->create());
        return $show->id;
      },
      'station_id' => rand(1,4),
      'start_at' => $faker->time("H:".$intervals[mt_rand(0,1)]),
      'end_at' => $faker->time("H:".$intervals[mt_rand(0,1)]),
    ];
});
