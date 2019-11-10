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
    }
    public function  selectedtravel($id)
    {
        $dataset = DB::table('travel')->where('travel_id', $id)->get();
        $dataset = $dataset[0];
        return view('Event-up.confrim_up', compact('dataset'));
    }
    public function accept($id)
    {
        DB::table('travel')-> where('travel_id', $id)->increment('seat_amount',1);
        return redirect('/accept/'.$id.'/see');
    }
    public function clsa($id)
    {
        $acceptdata = DB::table('travel')->where('travel_id', $id)->get();
        $acceptdata = $acceptdata[0];
        return view('Event-up.accept_up', compact('acceptdata'));
    }
}
