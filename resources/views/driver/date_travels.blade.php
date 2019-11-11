@extends('layouts.app')

@section('content')
<div class="container">
    <i class="fas fa-map-marker-alt"></i>
    <div class="card-body">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-center">สถานนะ</div>
                <div class="card-body">
                    <div class="col-md">
                        <p>สถานที่รับ : {{$dataon->location_up}}</p>
                        <p>สถานที่ส่ง : {{$dataon->location_down}}</p>
                        <p>เวลา : {{$dataon->time_start}}</p>
                        <p>ราคา : {{$dataon->price}}</p>
                        <p>จำนวนผู้เข้าร่วม : {{$dataon->seat_amount}} / {{$dataon->seat_empty}}</p>
                        <?php
                        echo "<td><a href='/driver/del/$dataon->id' ><button type='button' class='btn btn-outline-info'>สิ้นสุด</button></a></td>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
