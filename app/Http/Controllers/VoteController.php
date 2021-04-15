<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function showAll() {
        $votes = Vote::all();

        return view('index', ['votes' => $votes]);
        // return var_dump($votes);
    }
}
