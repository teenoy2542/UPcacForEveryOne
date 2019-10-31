@extends('layouts.app')  
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container">
    <i class="fas fa-map-marker-alt"></i>  
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="col-md">
                <div class="card">
                    <div class="card-header text-center">คอนเฟริม</div>
                    <div class="card-bod">
                        <div class="cal-12 text-center"> 
                            <i class="material-icons" style="font-size:30px;color:black">place</i> 
                            {{$dataset->location_up}}
                            <br>
                            <i class="material-icons" style="font-size:30px;color:black">my_location</i>
                            {{$dataset->location_down}}                                      
                        </div>
                        <div class="col-md">
                            <p>เวลา :{{$dataset->time_start}}</p>
                            <p>ราคา :{{$dataset->price}}</p>
                            <p>จำนวนที่นั่ง :{{$dataset->seat_amount}}</p>                            
                        </div>
                    </div> 
                    <div >
                        <div class="col-6 text-right">   
                              
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection