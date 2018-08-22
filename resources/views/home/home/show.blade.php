<!doctype html>
<html lang="zh">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>查看作品</title>
		<link rel="stylesheet" type="text/css" href="/homes/css/show.css">
		<script src="/homes/js/dynamics.js"></script>
		<script src="/homes/js/showgrid.js"></script>
		<link rel="stylesheet" href="/homes/css/lightbox.css">
		<script src="/homes/js/lightbox-plus-jquery.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="grid">
				@foreach($post->imgs as $imgs)
				<div class="grid-item">
					<a class="example-image-link" href="{{$imgs}}" data-lightbox="example-1" data-title="描述信息"> 
						<img class="example-image" src="{{$imgs}}" />
					</a>
				</div>
				@endforeach
			</div>
		</div>
		<script>
			(function() {
				function animate(item, x, y, index) {
					dynamics.animate(item, {
						translateX: x,
						translateY: y,
						opacity: 1
					}, {
						type: dynamics.spring,
						duration: 800,
						frequency: 120,
						delay: 100 + index * 30
					});
				}
				minigrid('.grid', '.grid-item', 6, animate);
				window.addEventListener('resize', function() {
					minigrid('.grid', '.grid-item', 6, animate);
				});
			})();
		</script>
	</body>

</html>