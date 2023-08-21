<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Match1;

class MatchesController extends Controller
{
    public function index() {
        return view('matches_creating');
    }

    public function create(Request $request) {
        $hometeam = $request->hometeam;
        $awayteam = $request->awayteam;
        $matchdate = $request->macthdate;
        $matchtime = $request->matchtime;


        $Match = new Match;
        $Match->hometeam = $hometeam;
        $Match->awayteam = $awayteam;
        $Match->matchdate = $matchdate;
        $Match->matchtime = $matchtime;
        $Match->save();
        return redirect()->back();
    }

    public function show() {
        $Matches = Match::all();
        return redirect('macthes_creating',compact(Matches));
    }

    public function show1() {
        $matches = Match1::all();
        return view('match',compact('matches'));
    }

    public function delete($id) {
        $Matches = Match::find($id);
        $Matches->delete($id);
        return redirect()->back();
    }
}
