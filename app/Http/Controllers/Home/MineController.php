<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Post;
use EasyWeChat\Factory;

/*
	个人参赛作品排名
	票数
 */

class MineController extends Controller
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
    	$user = session('wechat.oauth_user');	//拿到授权用户资料
    	$posts = Post::where('user_id',$user['default']['id'])->orderBy('created_at', 'desc')->get();
        return view('home/mine/index',compact('posts','user'));
    }
}