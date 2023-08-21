@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Creating Matches</h2><hr><br>
        <div class="row" style="height: 450px">
            <div class="col-8 bg-white d-flex">
                <ul class="list-group m-auto w-75 text-center">
                    @foreach ($matches as $match)
                    <li class="list-group-item "><h5>{{$match->hometeam}}</h5><span>VS</span><h5>{{$match->awayteam}}</h5></li>
                    @endforeach

                </ul>
            </div>

            <div class="col-4 bg-secondary d-flex">
                <form class="mt-5" action="{{route('matchcreate')}}" method="post">
                    @csrf
                    <input type="text" name="hometeam" placeholder="Home Team" required class="fomrm-group">
                    <input type="text" name="awayteam" placeholder="away Team" required class="fomrm-group">
                    <input type="text" name="matchdate" placeholder="Match Date" required class="fomrm-group">
                    <input type="text" name="matchtime" placeholder="Match Time" required class="fomrm-group">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
