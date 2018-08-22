<?php

namespace App\Http\Controllers\Home;
use EasyWeChat\Factory;
use Illuminate\Http\Request;
use EasyWeChat\Kernel\Messages\Article;

use App\Http\Requests;

class MaterialController extends Controller
{
	public $material;

	public function __construct()
	{
		$config = config('wechat.official_account.default');
		$material = Factory::officialAccount($config);
		$this->material = $material->material;
	}

	public function image()
	{
		$image = $this->material
				->uploadImage(public_path()."/material/images/fm.jpg");
		return $image;
	}

	public function  article()
	{
		$article = new Article([
    	'title' => '高精尖大师班介绍',
    	'thumb_media_id' => 'OYYYB8AOGsfMvPaubBNeeNarZc-CwCRCbQNqU-oe1b4',
    	'digest' => '高精尖',
    	"show_cover" => 1,
    	'content' => '<h1>高精尖大师班<h1>
				电影工业化领域的一线大师亲身分享电影创作的理念、技能和案例
			<h2>大师班安排</h2>
   <p>1.聘为北京电影学院客座教授，举办为时半天的公开课</p>
   <p>2.作为嘉宾，参与学院举办的相关论坛，并发言</p>
   <p>3.活动结束后可根据讲授内容形成结业作品，并出版书籍</p>
',
    	'source_url' => 'http://www.cqtxzyjh.com/share',
  		]);
  		$article = $this->material->uploadArticle($article);
  		return $article;
	}
}
