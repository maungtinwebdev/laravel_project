@extends('layouts.app')
@section('content')
    <div class="container mt-0 bg-" style="height: 750px">
        <div class="row bg-primary rounded mb-3 d-flex m-0 " style="height: 55px">
            <div class="col-11 d-flex m-auto bg-white rounded mt bg-" style="height: 45px"><div class="m-auto"><div class="marquee-w">
                <div class="marquee">
                    <span>ယနေ့ {{$matches->count()}} ပွဲပြသသွားမည် ဖြစ်ပါသည်။&nbsp;&nbsp;&nbsp;</span>
                </div>
                <div class="marquee marquee2">
                    <span>This is an infinitely sliding text example&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div></div>
            </div>
        </div>
        {{-- <h1>This Is Testing!</h1> --}}
        <div class="row style bg- d-flex mx-auto rounded w-100 h-100" style="background: transparent;" >
            <div class="col-11 d-flex justify-content-center bg- m-auto image-fluid">
                <ul class="list-group w-100 text-center my-4">
                    @foreach ($matches as $match )
                    <li class="row list-group-item text-danger d-flex bg-info rounded" style="border: none">
                      <div class="col-8">
                        <h2 class="text-white">{{$match->hometeam}}</h2> <span class="badge badge-danger round-pill">VS</span> <h2 class="text-white">{{$match->awayteam}}</h2> <a target="_blank" href="https://youtu.be/H8ThscWsQV8"><button class="btn btn-danger ms-auto mb-2">Live Stream</button></a>
                     </div>

                    <div class="col-3 bg-white rounded m-auto">{{$match->matchdate}} <br> <span class="bg-">({{$match->matchtime}})</span></div>

                    </li> <hr class="text-white">
                    @endforeach
                </ul>
        </div>
    </div>
    {{-- <div class="container bg-success">
        <div class="row bg-info d-flex mx-0" style="height: 650px" >
            <div class="col-8 bg-secondary m-auto" style="height: 500px"></div>
        </div>
    </div> --}}
@endsection
