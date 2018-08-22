<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>首页</title>
	<link rel="stylesheet" href="/homes/css/home.css">
	<link rel="stylesheet" href="/homes/css/reset.css">
	<link rel="stylesheet" href="/homes/css/lightbox.css">
	<link rel="stylesheet" href="/homes/css/foot.css">
	<script src="/homes/js/flexible.debug.js"></script>
	<script src="/homes/js/flexible_css.debug.js"></script>
	<script src="/homes/js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
	<!--head-->
	<div id="head">
		<img src="/homes/image/banner.png">

		<div class="company" style="height: 4.8rem; width:8.5rem">
			<li class="top">
				<span style="width:1.9rem">指导单位： </span>
				<p>四川省文化厅、成都市文体广新局、武侯区宣传部</p>
			</li>
			<p style="height:1rem">&nbsp</p>
			<li class="top">
				<span style="width:1.9rem ;">主办方：</span>
				<p>北京电影学院（四川培训中心）、四川星空国漫文化传媒有限公司、四川朝艺文化传媒有限公司、成都市新娱文化传媒股份有限公司</p>
			</li>
			<li class="bottom">
				<span style="width:1.9rem">承办方：</span>
				<p>北京电影学院（四川培训中心）动漫游戏设计学院</p>
			</li>
		</div>

		<br>
		<div class="concent">
			@foreach($messages as $message)
			<li>
				<h1>{{$message['title']}}</h1>
				<pre class="main">{{$message['content']}}</pre>
			</li>
			@endforeach
			<hr>
		</div>
	</div>

	<div id="main">
		<div class="time">
			<h1>距活动结束还有：</h1>
			<p id="time"> </p>
			<p id="timer" style="display: none">{{$carbon}}</p>
		</div>
		<div class="list">
			<div class="serach">
				<input type="text" placeholder="请输入搜索编号" id="ser1">
				<span id="ser">搜索</span>
			</div>

			<ul id="oul">
				@foreach($posts as $post)
				@if(!empty($post['link']))
				<li style="margin-bottom: 1.6rem">
					<span class="num">{{$post['id']}}</span>
					<div id="addd">
						<a href="{{$post['link']}}">
							<img class="example-image" src="{{$post['img']}}" alt="image-1" />
						</a>
					</div>
					
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
						@if($post->vote($user['default']['id'])->exists())
						<span></span>
						@else
						<a href="posts/{{$post->id}}/vote" type="button"><span class="right" id="vote">投票</span></a>
						<h1 style="padding-top: 1.3rem; font-size: 0.4rem ; font-family: 微软雅黑">作品名称:&nbsp&nbsp {{$post->name}}</h1>
						<hr>
						@endif
					</div>
				</li>

				@else
				<li style="margin-bottom: 1.6rem;">
					<span class="num">{{$post['id']}}</span>
					<div id="addd">
						<a href="/posts/{{$post->id}}/show">
							<img class="example-image" src="{{$post['img']}}" alt="image-1" />
						</a>
					</div>
					
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
						@if($post->vote($user['default']['id'])->exists())
						<span></span>
						@else
						<a href="/posts/{{$post->id}}/vote" type="button"><span class="right" id="vote">投票</span></a>
						@endif
						<h1 style="padding-top: 1.3rem; font-size: 0.4rem ; font-family: 微软雅黑">作品名称:&nbsp&nbsp {{$post->name}}</h1>
						<hr>
					</div>

				</li>



				@endif
				@endforeach
			</ul>
			<div style="height: 3rem"></div>
		</div>
	</div>
	@include('home.layout.footer')
<script>
	var btn = document.querySelector('#ser')
	var text = document.querySelector('#ser1')
	var oUl = document.querySelector('#oul')
	var oLi = oUl.getElementsByTagName('li')
	var num = oUl.getElementsByClassName('num')
	
	var len = oLi.length
	var arr = new Array()

	for(var i = 0; i < len; i++) {
		arr.push(num[i].innerHTML)
	}

	btn.onclick = function() {
	var Text = text.value
		for(var i = 0; i < len; i++) {

			if (arr[i] == Text) {
				oLi[i].style.display = 'block'
			} else {
				oLi[i].style.display = 'none'
			}
		}
	}

	var time = function() { 
		var time = document.querySelector('#time')
		var date1 = new Date()//开始时间
		var date = timer.innerHTML  //结束时间
		var date2 = date.replace(/\-/g, "/"); 
	    var date3 = new Date(date2).getTime() - date1.getTime();   //时间差的毫秒数        
	  
	    //------------------------------  
	  
	    //计算出相差天数  
	    var days=Math.floor(date3/(24*3600*1000))  
	  
	    //计算出小时数  
	  
	    var leave1=date3%(24*3600*1000)    //计算天数后剩余的毫秒数  
	    var hours=Math.floor(leave1/(3600*1000))  
	    //计算相差分钟数  
	    var leave2=leave1%(3600*1000)        //计算小时数后剩余的毫秒数  
	    var minutes=Math.floor(leave2/(60*1000))  
	    //计算相差秒数  
	    var leave3=leave2%(60*1000)      //计算分钟数后剩余的毫秒数  
	    var seconds=Math.round(leave3/1000)  
		
		time.innerHTML = days + '天&nbsp' + hours + '小时&nbsp' + minutes + '分&nbsp' + seconds + '秒&nbsp&nbsp&nbsp&nbsp'				
	
		if(days == 0 && hours == 0 && mins==0 && secs==0){
		time.innerHTML = '时间已截止'
		}
	}

	setInterval(function() {
		time()
	}, 200)
</script>
</body>
</html>