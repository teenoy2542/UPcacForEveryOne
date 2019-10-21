@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($users as $item)
                <div class="card">
                    <div class="card-header" align='right'>คนขับรถ</div>

                    <div class="card-body">
                        <b>ทางผ่าน: </b> {{$item->place1}}
                        <br>
                        <b>สถานที่ไปส่ง: </b> {{$item->place2}}
                        <div align='right'>
                            <a class='btn btn-outline-primary mb-2' href='/'>
                                เข้าร่วม
                            </a>
                        </div>
                    </div>
                </div>
                <br>

            @endforeach
        </div>
    </div>
</div>
@endsection
