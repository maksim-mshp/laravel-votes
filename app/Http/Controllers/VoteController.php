<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function showAll()
    {
        $votes = Vote::all();

        return view('index', ['votes' => $votes]);
        // return var_dump($votes);
    }

    public function create(Request $request)
    {
        $vote = new Vote;

        $vote->title = $request->title;
        $vote->text = $request->text;
        $vote->positive = 0;
        $vote->negative = 0;
        $vote->save();

        return redirect('/');


        // return var_dump($votes);
    }

    public function showID($id)
    {
        $vote = Vote::find($id);

        return view('show_vote', ['vote' => $vote]);
        // return var_dump($votes);
    }

    public function increasePositive($id)
    {
        $vote = Vote::find($id);
        $vote->positive++;
        $vote->save();

        return back();
    }


    public function increaseNegative($id)
    {
        $vote = Vote::find($id);
        $vote->negative++;
        $vote->save();

        return back();
    }

    public function remove($id)
    {
        Vote::destroy($id);

        return redirect('/');
    }
}
