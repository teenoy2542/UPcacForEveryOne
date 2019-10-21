@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">สร้างฟอร์ม</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url("driver")}}" method="post">
                       {{ csrf_field() }}
                       <label>วันที่: </label>
                       <input class='form-control mb-2' name='date' type='date'/>

                       <label>เวลา: </label>
                       <input class='form-control mb-2' name='time' type='text'/>

                       <label>ทางผ่าน: </label>
                        <select class='form-control mb-2' name='place1'>
                            <option>เลือก</option>
                            <option>7-11 ใต้สะพานลอย</option>
                            <option>7-11 Guitar</option>
                            <option>7-11 PJ Night</option>
                            <option>7-11 สละโสด</option>
                            <option>โลตัส</option>
                        </select>

                        <label>จำนวนที่นั่ง: </label>
                        <input class='form-control mb-2' name='number' type='number'/>

                        <label>ราคา: </label>
                        <input class='form-control mb-2' name='price' type='number'/>

                        <label>สถานที่ไปส่ง: </label>
                        <select class='form-control mb-2' name='place2'>
                            <option>เลือก</option>
                            <option>ขึ้น มหาวิทยาลัย พะเยา</option>
                            <option>ลง มหาวิทยาลัย พะเยา</option>
                            <option>ออกนอกสถานที่</option>
                        </select>

                        <div align='right'>
                            <input class='btn btn-primary mb-2' type='submit' value='Save'/>
                        </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
