<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Match;
use Illuminate\Http\Request;


class MatchController extends Controller
{
    public function index()
    {
        return view('admin/match/index');
    }

    public function store(Request $request)
    {

        DB::table('votes')->truncate();
        DB::table('posts')->truncate();
        DB::table('matches')->truncate();
        $match = new Match;
        $data = $request->all();
        $match->date = $data['date'];
        $match->save();
        return back()->with('info','比赛发起成功');
    }
}
