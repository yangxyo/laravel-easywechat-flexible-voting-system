<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<title>排名</title>
	<link rel="stylesheet" href="homes/css/rank.css">
	<link rel="stylesheet" href="homes/css/reset.css">
	<link rel="stylesheet" href="homes/css/foot.css">
	<script src="/homes/js/flexible_css.debug.js"></script>
	<script src="/homes/js/flexible.debug.js"></script>
</head>
<body>
	<div id="concent">
		<table class="list" cellpadding="0" cellspacing="0">
			<tr>
				<td>排名</td>
				<td>姓名</td>
				<td>票数</td>
			</tr>
			@forelse($posts as $post)
			<tr>
				<td></td>
				<td>{{$post->name}}</td>
				<td>{{$post->votes_count}}</td>
			</tr>
			@empty
			<p id="m">暂无作品</p>
				@endforelse
		</table>
	</div>

	@include('home.layout.footer')
<script>
	var oList = document.querySelector(".list")
	var oLists = oList.getElementsByTagName('tr')
	var len = oLists.length

	

	var arr = new Array() 

	for(var i = 1; i < len; i++) {
		var name = oLists[i].children[1].innerText
		var score = oLists[i].children[2].innerText
		arr.push([name, score])
	}

	arr.sort(function(a, b) {
		return b[1] - a[1]
	})

	for(var i = 1; i < len; i++) {
		if(i % 2 == 0) {
			oLists[i].style.backgroundColor = '#d2d2dc'
		} else {
			oLists[i].style.backgroundColor = '#fff'
		}

		oLists[i].children[0].innerText = i
		oLists[i].children[1].innerText = arr[i - 1][0]
		oLists[i].children[2].innerText = arr[i - 1][1]
	}
</script>
</body>
</html>