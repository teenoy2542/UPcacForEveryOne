<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use DB;

class TravelController extends Controller
{
    public function Getdata()
    {
        $travels = DB::select('select * from travel');
        return view('Event-up.event_up', compact('travels'));

        $travels = DB::select('select * from travel');
        return view('Event_down.event_down', compact('travels'));
    }
    public function  selectedtravel($id)
    {
        $dataset = DB::table('travel')->where('travel_id', $id)->get();
        $dataset = $dataset[0];
        return view('Event-up.confrim_up', compact('dataset'));

        $dataset = DB::table('travel')->where('travel_id', $id)->get();
        $dataset = $dataset[0];
        return view('Event_down.confrim_down', compact('dataset'));
    }
    public function accept($id)
    {
        $acceptdata = DB::table('travel')->where('travel_id', $id)->get();
        $acceptdata = $acceptdata[0];
        return view('Event-up.accept_up', compact('acceptdata'));

        $acceptdata = DB::table('travels')->where('travel_id', $id)->get();
        $acceptdata = $acceptdata[0];
        return view('Event_down.accept_down', compact('acceptdata'));
    }

    public function Getdatadown()
    {
        $travels = DB::select('select * from travel');
        return view('Event_down.event_down', compact('travels'));
    }
}
