<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\Travels;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->type == 'User'){
            return view('home');
        }
        $datacar = DB::table('license_car')->where('id_users', Auth::user()->id)->get();
        return view('driver.create_travels', compact('datacar'));
    }

    public function datatavels()
    {
        $dataon = DB::table('travels')->where('id_users', Auth::user()->id)->get();
        $dataon = $dataon[0];
        return view('driver.date_travels', compact('dataon'));
    }

    public function deletedata($id)
    {
        $deldata = travels::where('id', '=', $id)->delete();
        return redirect('/driver/travel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create_travels');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_users = Auth::user()->id;
        $id_license_car = $_POST['id_license_car'];
        $date = '0';
        $time_start = $_POST['time_start'];
        $location_up = $_POST['location_up'];
        $location_down = $_POST['location_down'];
        $seat_amount = 0;
        $seat_empty = $_POST['seat_empty'];
        $price = $_POST['price'];
        $status = 'on';

        //DB::insert("insert into travels (id_users, date, time, location_up, location_down, seat_amount, seat_empty, price, category, status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",[
        //    $id_users, $date, $time, $location_up, $location_down, $seat_amount, $seat_empty, $price, $category, $status
        //]);

        Travels::create([
            'id_users' => $id_users,
            'id_license_car' => $id_license_car,
            'date' => $date,
            'time_start' => $time_start,
            'location_up' => $location_up,
            'location_down' => $location_down,
            'seat_amount' => $seat_amount,
            'seat_empty' => $seat_empty,
            'price' => $price,
            'status' =>  $status]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

}
