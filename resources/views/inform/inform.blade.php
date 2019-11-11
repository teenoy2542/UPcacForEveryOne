@extends('layouts.app')  
@section('content')

<div class="container">
    <div class="card-body">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('/inform')}}" method="post">
                        {{ csrf_field() }}

                        <label>ชื่อ: </label>
                        <input class='form-control mb-2' name='name' type='text' value="{{Auth::user()->name}}" autofocus required/>

                        <label>อีเมลล์: </label>
                        <input class='form-control mb-2' name='email' type='email' value="{{Auth::user()->email}}" required/>

                        <div align='right'>
                            <input class='btn btn-primary mb-2' type='submit' value='Edit'/>
                        </div>
                        
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>





@endsection