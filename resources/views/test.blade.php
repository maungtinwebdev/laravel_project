@extends('layouts.app')
@section('content')
    <div class="container mt-0 bg-" style="height: 400px">
        <div class="row bg-primary rounded mb-3 d-flex m-0 " style="height: 55px">
            <div class="col-11 d-flex m-auto bg-white rounded mt bg-" style="height: 45px"><div class="m-auto w-md-75"><div class="marquee-w">
                <div class="marquee">
                    <span>This is an infinitely sliding text example&nbsp;&nbsp;&nbsp;</span>
                </div>
                <div class="marquee marquee2">
                    <span>This is an infinitely sliding text example&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div></div></div>
        </div>
        {{-- <h1>This Is Testing!</h1> --}}
        <div class="row bg-white d-flex mx-auto mt-5 rounded w-75 h-100" >
            <div class="col-10 d-flex justify-content-center bg- m-auto image-fluid">
                <div class="bg- m-auto" >
                    <button class="m-auto mb-3 btn btn-primary d-flex" style="height: 50px;width:250px"><a href="{{route('test')}}" class="text-light m-auto">Home</button></a>
                    <button class="m-auto mb-3 btn btn-primary d-flex" style="height: 50px;width:250px"><span class="m-auto"><a href="{{route('test2')}}" class="text-light m-auto">Live Score</a></button>
                    <button class="m-auto mb-3 btn btn-primary d-flex" style="height: 50px;width:250px"><a href="{{route('matchcreate')}}" class="text-light m-auto">Live Stream</a></button>
                    {{-- @auth
                    <button class="m-auto mb-3 btn btn-primary d-flex" style="height: 50px;width:250px"><a href="{{route('test3')}}" class="text-light m-auto">Golden Tips</a></button>
                    @endauth --}}
                    <button class="m-auto mb-3 btn btn-primary d-flex" style="height: 50px;width:250px"><a href="{{route('test3')}}" class="text-light m-auto">Golden Tips</a></button>
                    <button class="m-auto mb-0 btn btn-primary d-flex" style="height: 50px;width:250px"><a href="#" class="text-light m-auto">Special Tips</a></button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container bg-success">
        <div class="row bg-info d-flex mx-0" style="height: 650px" >
            <div class="col-8 bg-secondary m-auto" style="height: 500px"></div>
        </div>
    </div> --}}
@endsection
