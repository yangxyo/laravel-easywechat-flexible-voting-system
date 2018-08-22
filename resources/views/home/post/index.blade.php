<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<title>参赛</title>
	<link rel="stylesheet" href="/homes/css/layout.css">
	<link rel="stylesheet" href="/homes/css/reset.css">
	<link rel="stylesheet" href="/homes/css/foot.css">
	<script src="/homes/js/flexible_css.debug.js"></script>
	<script src="/homes/js/flexible.debug.js"></script>
	
</head>
<body>
	<div id="layout_main">
		<ul class="name">
			<a href="/posts/addc">
			<li>
				 <p>插画</p>
				<img src="/homes/image/y.png">
			</li>
			</a>

			<a href="/posts/addd">
			<li>
				<p>多格漫画</p>
				<img src="/homes/image/y.png">
			</li>
			</a>

			<a href="/posts/addy">
			<li>
				<p>游戏原画</p>
				<img src="/homes/image/y.png">
			</li>
			</a>

			<a href="/posts/addv">
			<li>
				<p>动画短片</p>
				<img src="/homes/image/y.png">
			</li>
			</a>
		</ul>

		<div class="ad">
			<img src="/homes/image/ad.png">
		</div>
		<div style="width:9rem">
		<li style="width:9rem">
		<h1 style="color: #fff;background-color: #a9973c;width: 2rem;height: 0.8rem;font-size: 0.4rem;font-weight: 900;line-height: 0.8rem;border-top-right-radius: 0.4rem;border-bottom-right-radius: 0.4rem;padding-left: 0.667rem;">参赛须知</h1>

			<p style="width: 9rem;margin-left: 0.5rem;margin-top: 0.267rem;margin-bottom: 0.32rem;font-size: 0.34rem;color: #7b7b49;">1.参加稿件必须是学生个人或团体的原创作品。作品提交者应拥有其版权；如为代理人，应拥有授权证明。出现版权纠纷，侵权责任由参赛作者负责，主办方将取消其参赛资格，并提请所在学校通报批评。<br>2.大赛组委会有权将参赛作品作为本次大赛宣传出版的内容，可用于网络传播和其他方式公益科普宣传使用。<br>3.参赛者在本次大赛时间段外，用参赛作品参加另一同类比赛或相关商业活动不受本主办方限制，由此可能产生的与其他比赛组织者或有关机构的规定发生冲突而带来的一切后果由参赛者本人承担。</p>
		</li>
		<br>
		<br>
		<br>
	</div>
	</div>

	@include('home.layout.footer')

<script>
	var list = document.querySelector('#layout_main')
	var lists = list.getElementsByTagName('li')
	var imgs = list.getElementsByTagName('img')
	var len = lists.length

	

	list = function() {
		for(var i = 0; i < len; i++) {
		
			lists[i].index = i
			lists[i].onclick = function() {

				for(var i = 0; i < len; i++) {
					imgs[i].src = '/homes/image/y.png'
				}

				imgs[this.index].src = '/homes/image/yed.png'
			}
		}
	}

	list()
</script>
</body>
</html>