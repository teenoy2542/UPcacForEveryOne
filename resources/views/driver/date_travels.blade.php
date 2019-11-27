@extends('layouts.app')

@section('content')
<div class="container">
    <i class="fas fa-map-marker-alt"></i>
    <div class="card-body">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-center" style="color:whitesmoke; background-color: #59ACF6;">สถานนะ</div>
                <div class="card-body">
                    <div class="col-md">
                        <p>สถานที่รับ : {{$dataon->location_up}}</p>
                        <p>สถานที่ส่ง : {{$dataon->location_down}}</p>
                        <p>เวลา : {{$dataon->time_start}}</p>
                        <p>ราคา : {{$dataon->price}}</p>
                        <p>จำนวนผู้เข้าร่วม : {{$dataon->seat_amount}} / {{$dataon->seat_empty}}</p>
                        <p>สถานะ : {{$dataon->status}}</p>
                        <?php
                        echo "<td><a href='/driver/ondata/$dataon->id' ><button type='button' class='btn btn-outline-success'>เปิดการเดินทาง</button></a></td>";
                        ?>
                        <?php
                        echo "<td><a href='/driver/del/$dataon->id' ><button type='button' class='btn btn-outline-danger'>ปิดการเดินทาง</button></a></td>";
                        ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
