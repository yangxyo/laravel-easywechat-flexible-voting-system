<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<title>上传照片</title>
	<link rel="stylesheet" href="/homes/css/post.css">
	<link rel="stylesheet" href="/homes/css/reset.css">
	<link rel="stylesheet" href="/homes/css/add.css">
	<script src="/homes/js/flexible_css.debug.js"></script>
	<script src="/homes/js/flexible.debug.js"></script>
</head>
<body>
	<div id="work_main">
		<div class="information">
<form action="{{url('/posts/store')}}" method="post" enctype="multipart/form-data">
			<li>
				<p>所在校园</p>
				<input type="text" placeholder="请输入校园名称" name="school" value="{{old('school')}}">
			</li>
			<li>
				<p>所在年级</p>
				<input type="text" placeholder="请输入就读年级" name="class" value="{{old('class')}}">
			</li>
			<li>
				<p>所学专业</p>
				<input type="text" placeholder="请输入所学专业" name="profession" value="{{old('profession')}}">
			</li>
			<li>
				<p>真实姓名</p>
				<input type="text" placeholder="请输入您的真实姓名" required="required" name="real_name" value="{{old('real_name')}}">
			</li>
			<li>
				<p>联系电话</p>
				<input type="text" placeholder="请输入您的联系电话" required="required" name="tel" value="{{old('tel')}}">
			</li>

			<li>
				<p>作品名称</p>
				<input type="text" placeholder="请输入您的作品名称" required="required" name="name" value="{{old('name')}}">
			</li>

			<li>
				<p>封面</p>
				<input type="file" name="img" accept="image/*" required="required">
			</li>

			<li>
				<p>作品</p>
				<input type="file" name="imgs[]" accept="image/*" multiple required="required" placeholder="可选择多张图片">
			</li>

			<li>
				<input type="text" name="type" value="chahua" style="display: none">
			</li>

			<div id="add">
				{{csrf_field()}}
                <input type="submit" value="提交作品">
			</div>
		</form>
		</div>
	</div>
</body>
</html>