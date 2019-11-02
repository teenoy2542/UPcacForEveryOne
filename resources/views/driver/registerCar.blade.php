@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ลงทะเบียนรถ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url("/driver/licensecar")}}" method="post">
                        {{ csrf_field() }}
                        <div>
                            <label>ทะเบียนรถ</label>
                            <div>
                                <input class='form-control mb-2' name='license_car' type='text' required/>
                            </div>
                        </div>

                        <div>
                            <label>ยี่ห้อรถ</label>
                            <div>
                                <input class='form-control mb-2' name='brand_car' type='text' required/>
                            </div>
                        </div>

                        <div>
                            <label>รุ่นรถ</label>
                            <div>
                                <input class='form-control mb-2' name='model_car' type='text' required/>
                            </div>
                        </div>

                        <div>
                            <label>สีรถ</label>
                            <div>
                                <input class='form-control mb-2' name='color_car' type='text' required/>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>จำนวนที่นั่ง</label>
                            <div>
                                <select id='number_seats' onchange="disp(dis)" class='form-control' name="number_seats" required>
                                        <option value="" disabled selected>เลือก</option>
                                        <option value="2">2</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                </select>
                            </div>
                        </div>

                        <div align='right'>
                            <input class='btn btn-primary mb-2' type='submit' value='ลงทะเบียนรถ'/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
