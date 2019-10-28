<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use DB;

class TravelController extends Controller
{
    public function Getdata()
    {
        $travel = DB::select('select * from travel');
        return view('Event-up.event_up', compact('travel'));
    }
}
