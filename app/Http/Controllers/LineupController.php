<?php

namespace App\Http\Controllers;

use App\LineupItem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Resources\LineupItems;
use Illuminate\Support\Facades\Validator;

class LineupController extends Controller
{
    public function index($date, $station)
    {
        //validation
        $validator = Validator::make([
            'date' => $date,
            'station' => $station,
        ], [
            'date'      => 'required|date_format:Y-m-d',
            'station'  => 'required|exists:stations,name'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        //day in the date
        $day = strtolower(Carbon::createFromFormat('Y-m-d', $date)->format('l'));

        //get lineup items on the day for station
        $lineupItems = LineupItem::whereActive(true)
          ->whereHas('station', function($q) use($station) {
              $q->whereName($station);
          })
          ->whereHas('day', function($qry) use($day) {
            $qry->whereName($day);
          })
          ->get();

        return LineupItems::collection($lineupItems);
    }
}
