@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">สำหรับ คนขับ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->license_car == '')

                    <form action="{{url('/registercar')}}" method="post">
                        <label>เลขใบขับขี่: </label>
                        <input class='form-control mb-2' name='license_driver' type='number'/>

                        <label>ทะเบียนรถ: </label>
                        <input class='form-control mb-2' name='license_car' type='text'/>

                        <div align='right'>
                            <input class='btn btn-primary mb-2' type='submit' value='Save'/>
                        </div>
                    </form>

                    @else

                    <form action="" method="post">

                    </form>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
