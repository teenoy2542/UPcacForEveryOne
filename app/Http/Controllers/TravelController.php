<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travels,LicenseCar;
use DB;
use Auth;

class TravelController extends Controller
{

    public function Getdata()
    {
        $travels = DB::select('select * from travels');
        return view('Event-up.event_up', compact('travels'));
    }
    public function  selectedtravel($id)
    {
        $dataset = DB::table('travels')->where('id', $id)->get();
        $dataset = $dataset[0];
        return view('Event-up.confrim_up', compact('dataset'));
    }
    public function accept($id)
    {
        DB::table('travels')-> where('id', $id)->increment('seat_amount',1);
        DB::table('users_travels')->insert(
            ['users_id' => Auth::user()->id, 'travel_id' => $id]
        );
        return redirect('/accept/'.$id.'/see');
    }
    public function clsa($id)
    {
        $acceptdata = DB::table('travels')-> where('id', $id)->get();
        $joindata = DB::table('license_car')->where('id',$acceptdata[0]->id_license_car)->get();
        $acceptdata = $acceptdata[0];
        $joindata = $joindata[0];
        return view('Event-up.accept_up', compact('acceptdata','joindata'));
    }
}
