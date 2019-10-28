@extends('layouts.app')  
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="card-body">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header text-center">รถที่จะขึ้นมอ</div>
                        <div class="card-body">
                            
                                <table class="table table-hover">
                                    <thead align="center">
                                      <tr>
                                        <th scope="col">เวลา</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">จำนวนที่นั่ง</th>
                                        <th scope="col">สถานที่รับ</th>
                                        <th scope="col">สถานะการเดินทาง</th>
                                      </tr>
                                    </thead>
                                    <tbody align="center">
                                    @foreach ($travel as $item)
                                      <tr>
                                        <th scope="row">{{$item->time_start}}</th>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->seat_amount}}</td>
                                        <td>{{$item->location_up}}</td>
                                        <td>{{$item->status}}</td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>          
                            
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

