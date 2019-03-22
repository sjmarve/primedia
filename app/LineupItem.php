<?php

namespace App;

use App\Day;
use App\Show;
use App\Station;
use Illuminate\Database\Eloquent\Model;

class LineupItem extends Model
{
    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function show()
    {
        return $this->belongsTo(Show::class);
    }
}
