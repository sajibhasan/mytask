<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	{!! Html::style('css/style.css') !!}
</head>
<body>

	<div class="container">

		<div class="row">
			@yield('content')
		</div>
	</div>

	<script src="{!! asset('js/jquery-1.12.2.min.js') !!}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>