@extends('layouts.app')  
@section('content')

<div class="container my-3">
    <div class="card-header" style="color:whitesmoke; background-color: #59ACF6;" align="center">ข้อมูลการเดินทาง</div>
    <div class="card-body">
        <div class="col">
            @foreach ($showhis as $user)
            <div class="card my-3">
                <div class="card-body">                    
                    <div class="row">            
                        <div class="col-6">
                            <p>ทะเบียนรถ : {{$user->license_car}}</p>
                            <p>สถานที่รับ : {{$user->location_up}}</p>
                            <p>สถานที่ส่ง : {{$user->location_down}}</p>
                            <p>ราคา :  {{$user->price}}</p>                        
                        </div>
                        <div class="col-6">
                            <p>เวลา : {{$user->time_start}}</p>
                            <p>สถานที่ส่ง : {{$user->location_down}}</p>
                        </div>
                    </div>           
                </div>
            </div>
            @endforeach                
        </div>
    </div>
</div>

@endsection