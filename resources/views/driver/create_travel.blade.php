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
                    @if ( 1==0 )
                    <label>เลือกประเภท </label>
                    <div class="btn-group btn-group-toggle col-12 pl-0 ml-auto">
                            <label class="btn btn-outline-primary col-3">
                                <input type="radio" id="options" value="ขึ้นมอ" onclick="up()"  autocomplete="off"> ขึ้นมอ
                             </label>
                            <label class="btn btn-outline-primary col-3">
                                <input type="radio" value="ลงมอ" onclick="down()" autocomplete="off"> ลงมอ
                            </label>
                    </div>
                    @endif
                    <label class="mt-2">เลือกรถ </label>
                        <select class='form-control mb-2 ' name='location_down' required>
                            <option value="" selected>เลือก</option>
                        </select>

                    <form action="{{url("/driver/travel")}}" method="post">
                       {{ csrf_field() }}
                       <label>วันที่ </label>
                       <input class='form-control mb-2' name='date' type='date' required/>

                       <label>เวลา </label>
                       <input class='form-control mb-2' name='time' type='text' required/>

                       <label>สถานที่ขึ้น</label>
                        <input class='form-control mb-2' name='location_up' type='text' value="ที่รอรถเมล์หน้ามอ" placeholder="ที่รอรถเมล์หน้ามอ" disabled/>

                        <label>สถานทีลง</label>
                        <input class='form-control mb-2' name='location_down' type='text' required/>

                        <label>จำนวนที่นั่ง </label>
                        <input class='form-control mb-2' name='seat_amount' type='number' required/>

                        <label>ราคา </label>
                        <input class='form-control mb-2' name='price' type='number' required/>


                        <div align='right'>
                            <input class='btn btn-primary mb-2' type='submit' value='Save'/>
                        </div>
                        <input type="text" class="col-0" value="ที่รอรถเมล์หน้ามอ" name='location_up' style='display:none;'>
                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>

    // function up(){
    //     $('#location_up')
    //     .empty()
    //     .append('<option selected="ที่รอรถเมล์หน้ามอ" value="ที่รอรถเมล์หน้ามอ">ที่รอรถเมล์หน้ามอ</option>')
    //     ;
    //     $("#location_up").val("ที่รอรถเมล์หน้ามอ");
    //     $('#location_down').empty();
    //     var litdown = ["ตึกICT", "ตึกวิศวะ"];
    //     for(i = 0; i < litdown.length; i++)
    //     $('#location_down').append(new Option(litdown[i], litdown[i]));
    // }
    // function down(){
    //     $('#location_down')
    //     .empty()
    //     .append('<option selected="ที่รอรถเมล์หน้ามอ" value="ที่รอรถเมล์หน้ามอ">ที่รอรถเมล์หน้ามอ</option>')
    //     ;
    //     $("#location_down").val("ที่รอรถเมล์หน้ามอ");
    //     $('#location_up').empty();
    //     var litdown = ["ตึกICT", "ตึกวิศวะ", "ตึกPYK", "ตึกพยาบาล", "หอใน"];
    //     for(i = 0; i < litdown.length; i++)
    //     $( '#location_up' ).append(new Option(litdown[i], litdown[i]));
    // }
</script>
@endsection
