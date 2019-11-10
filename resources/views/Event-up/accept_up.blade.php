@extends('layouts.app')  
@section('content')
<br>
<div class="container">    
        <div class="card">
            <div class="card-header text-center">รายละเอียด</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p>ทะเบียนรถ : {{$acceptdata->id_license_car}}</p>
                        <p>สถานที่รับ : {{$acceptdata->location_up}}</p> 
                        <p>ราคา :  {{$acceptdata->price}}</p>
                        <p>จำนวนที่นั่ง : {{$acceptdata->seat_amount}}</p>                                      
                    </div>
                    <div class="col-6">
                        <p>เวลา : {{$acceptdata->time_start}}</p>
                        <p>สถานที่ส่ง : {{$acceptdata->location_down}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection