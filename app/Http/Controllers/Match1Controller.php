<?php

namespace App\Http\Controllers;

use App\Models\Match1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Match1Controller extends Controller
{

    public function index()
    {
        return view('test1');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $hometeam = $request->hometeam;
        $awayteam = $request->awayteam;
        $matchdate = $request->matchdate;
        $matchtime = $request->matchtime;

        $matches = new Match1;
        $matches->hometeam = $hometeam;
        $matches->awayteam = $awayteam;
        $matches->matchdate = $matchdate;
        $matches->matchtime = $matchtime;
        $matches->save();
        return redirect()->back();

        // dd($match->matchdate);
    }


    public function show()
    {
        $matches = Match1::all();
        // return view('match', [
        //     'matches' => $matches,
        // ]);

        // dd($matches);
        return view('test1', compact('matches'));
    }

    public function show1()
    {
        $matches = Match1::all();
        // return view('match', [
        //     'matches' => $matches,
        // ]);

        // dd($matches);
        return view('match', compact('matches'));
    }


    public function edit(Match1 $match1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Match1  $match1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match1 $match1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Match1  $match1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (Auth::user()) {
            Match1::find($id)->delete();
            // dd($match1);
            // $match1->delete();
            return redirect()->route('matchcreateshow');
            # code...
        // } else {
        //     echo'<div class="alert alert-info"><h1>Please Login First</h1></div>';
        // }
        // Match1::find($id)->delete();
        // // dd($match1);
        // // $match1->delete();
        // return redirect()->route('matchcreateshow');
    }
}
