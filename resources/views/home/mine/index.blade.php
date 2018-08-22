<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<title>参赛</title>
	<title>参赛</title>
	<link rel="stylesheet" href="/homes/css/home.css">
	<link rel="stylesheet" href="/homes/css/reset.css">
	<link rel="stylesheet" href="/homes/css/foot.css">
	<link rel="stylesheet" href="/homes/css/lightbox.css">
	<link rel="stylesheet" href="/homes/css/my.css">
	<script src="/homes/js/flexible_css.debug.js"></script>
	<script src="/homes/js/flexible.debug.js"></script>
</head>
<body>
	<div id="main" style="background-image: url(/homes/image/background.png);">
		<div class="head">
			<div class="img">
				<div class="quan">
				<img src="{{$user['default']['avatar']}}">
				</div>
			</div>
				
		</div>
			<p class="name" style="text-align: center;
									color: #fff;
									font-size: 0.6rem;
									line-height: 1rem;">{{$user['default']['nickname']}}</p>
	</div>


	<div id="main">
		<div class="list">
			<ul  style="background-color: #fff">
				@forelse($posts as $post)
				<li>
					<span class="num">{{$post['id']}}</span>
					<a class="example-image-link" href="{{$post->img}}" data-lightbox="example-1" data-title="描述信息"> 
						<img class="example-image" src="{{$post->img}}" alt="image-1" />
					</a>
					<div class="rank">
						<span class="left">
							<span>
								<p>{{$post['votes_count']}}</p>
								<p>当前票</p>
							</span>
							<span>
								<p>{{$post['ranking']}}</p>
								<p>排名</p>
							</span>
						</span>
					</div>
				</li>
				@empty
				<p id="q">请尽快提交作品</p>
				@endforelse
			</ul>
		
		</div>
		<div style="height: 2rem "></div>
	</div>
</div>
	@include('home.layout.footer')
</body>
</html>