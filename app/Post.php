<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{

    protected $table = "posts";

    // 作者
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'OpenId');
    }

    //文章的所有赞
    public function votes()
    {
    	return $this->hasmany(\App\Vote::class)->orderBy('create_at','desc');
    }

    //一个用户每天投一票
    public function vote($user_id)
    {
    	return $this->hasone(\App\Vote::class)->where('user_id',$user_id);
    }
}
