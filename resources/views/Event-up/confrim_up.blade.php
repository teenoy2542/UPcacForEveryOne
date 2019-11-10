@extends('layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container">
    <i class="fas fa-map-marker-alt"></i>
    <div class="card-body">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-center">ยืนยันการเดินทาง</div>
                <div class="card-body">
                    <div class="col-12 text-center">
                        <i class="material-icons" style="font-size:30px;color:black">place</i>
                        {{$dataset->location_up}}
                        <br>
                        <i class="material-icons" style="font-size:30px;color:black">my_location</i>
                        {{$dataset->location_down}}
                    </div>
                    <div class="col-md">
                        <p>เวลา :{{$dataset->time_start}}</p>
                        <p>ราคา :{{$dataset->price}}</p>
                        <p>จำนวนที่นั่ง :{{$dataset->seat_amount}}/{{$dataset->seat_empty}}</p>
                    </div>

                    <div align='center'>
                        <?php
                        echo "<a href='/accept/$dataset->id'><button type='button' class='btn btn-outline-info'>ยืนยัน</button></a>";
                        ?>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
