@extends('layouts.app')
@section('content')

    <div class="container">
        {{-- <h1 class="bg-primary">This Is Posting Text</h1> --}}
        <h1 class="text-white">Match: <span class="badge badge-primary">{{$matches->count()}}</span></h1>

        <div class="row">
            <div class="col-8">Left
                <table class="table table-dark table-striped table-borderd">

                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        {{-- <th>Content</th> --}}
                        <th class="text-center">To Do</th>
                    </tr>
                    @foreach ($matches as $match)
                    <tr>
                        <td>{{$match->hometeam}}</td>
                        <td>{{$match->awayteam}}</td>
                        <td>{{$match->matchdate}}</td>
                        <td><a href="{{route('matchedit')}}"><button class="btn btn-warning mx-2">Edit</button></a>
                            <a href="{{url('/matchdelete/'.$match->id.'/destroy/')}}"><button class="btn btn-danger">Delete</button></a></td>
                        {{-- <td>{{$match->content}}</td> --}}
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-4">Right
                <form action="{{route('matchcreate')}}" method="post" class="m-auto">
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
