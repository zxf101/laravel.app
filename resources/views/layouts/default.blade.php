<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','laravel') - laravel 入门教程</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/index.css">
</head>
<body>
	@include('layouts._header')
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			@yield('content')
			@include('layouts._footer')
		</div>
	</div>
</body>
</html>