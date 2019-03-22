<?php

namespace App;

use App\Presenter;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public function presenters()
    {
        return $this->belongsToMany(Presenter::class);
    }
}
