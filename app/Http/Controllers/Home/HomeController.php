<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use EasyWeChat\Factory;
use Carbon\Carbon;
use App\User;
use App\Post;
use App\Message;
use App\Match;

/*
	主页：
	包括赛事信息
	活动时间
	图片
	票数
	排名
	投票
 */

class HomeController extends Controller
{
	public function index()
	{
		$user = session('wechat.oauth_user');
		$config = config('wechat.official_account.default');
		$app = Factory::officialAccount($config);
		//判断是否关注微信
		if($app->user->get($user['default']['id'])['subscribe']==0){
                 return view("home/home/guanzhu");
            }
        //判断数据库中用户信息是否存在
		if(!User::where('OpenId',$user['default']['id'])->exists())
		{
			$userm = new User;
			$userm->OpenId = $user['default']['id'];
			$userm->nickname = $user['default']['nickname'];
			$userm->img = $user['default']['avatar'];
			$userm->save(); 
		}
		//给比赛截止时间赋予默认值
		if(empty(Match::where('id',1)->first()))
		{
			$match = new Match;
			$match->date = "2018-05-01";
			$match->save ();
		}
		$match = Match::where('id',1)->first();
		$carbon = Carbon::parse($match->date)->toDateTimeString();
		self::mySort();
		$posts = Post::all();
		$messages = Message::all();
		return view('home/home/index',['posts'=>$posts,'messages'=>$messages,'carbon'=>$carbon,'user'=>$user]);
	}

	//投票
	public function vote(Post $post)
	{
		$match = Match::where('id',1)->first();
		if(Carbon::parse('today') == $match->date)
		{
			return back()->with('info','评选时间已截止');
		}
		else
		{
			$vote = new \App\Vote;
			$user = session('wechat.oauth_user');
			$vote->user_id = $user['default']['id'];
			$post->votes()->save($vote);
			$post->votes_count++;
			$post->save();
			return back();
		}
	}

	public function show(Post $post)
	{
		$post->imgs = explode(',', $post->imgs);
		return view('home/home/show',compact('post'));
	}

	//作品名次排序函数
	public static function mySort()
	{
		$posts = DB::table('posts')->orderBy('votes_count', 'desc')->get();
		for($i=0; $i<count($posts);$i++)
		{
			$post = Post::where('id',$posts[$i]->id)->first();
			$post->ranking = $i+1;
			$post->save();
		}
	}

}
