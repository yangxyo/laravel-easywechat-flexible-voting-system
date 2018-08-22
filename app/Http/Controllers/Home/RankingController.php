<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Post;

/*
	排名总览
 */

class RankingController extends Controller
{
	public function index()
    {
    	$posts = Post::all();
        return view('home/ranking/index',compact('posts'));
    }
}