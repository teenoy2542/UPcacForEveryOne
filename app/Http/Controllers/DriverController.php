<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\Driver;

class DriverController extends Controller
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
        return view('driver.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create');
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
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location_up = $_POST['location_up'];
        $location_down = $_POST['location_down'];
        $seat_amount = $_POST['seat_amount'];
        $seat_empty = $_POST['seat_amount']-1;
        $price = $_POST['price'];
        if($location_up == 'ที่รอรถเมล์หน้ามอ'){
            $category = 'ขึ้น';
        }elseif($location_down == 'ที่รอรถเมล์หน้ามอ'){
            $category = 'ลง';
        }
        $status = 'on';

        DB::insert("insert into drivers (id_users, date, time, location_up, location_down, seat_amount, seat_empty, price, category, status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",[
            $id_users, $date, $time, $location_up, $location_down, $seat_amount, $seat_empty, $price, $category, $status
        ]);

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
        //
    }
}
