<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LineupItems extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'show_name'        => $this->show->name,
            'show_description' => $this->show->description,
            'day'              => ucfirst($this->day->name),
            'start_time'       => $this->start_at,
            'end_time'         => $this->end_at,
            'station'          => $this->station->name,
            'show_presenters'  => Presenters::collection($this->show->presenters),
        ];
    }
}
