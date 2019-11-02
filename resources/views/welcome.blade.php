@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @guest
            @else
            @foreach ($users as $item)
            <div class="card">
                    <div class="card-header" align='right'>คนขับรถ</div>

                    <div class="card-body">
                        <b>สถานที่ขึ้น: </b> {{$item->location_up}}
                        <br>
                        <b>สถานที่ลง: </b> {{$item->location_down}}
                        <div align='right'>
                            <a class='btn btn-outline-primary mb-2' href='/'>
                                เข้าร่วม
                            </a>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            @endguest
        </div>
    </div>
</div>
@endsection
