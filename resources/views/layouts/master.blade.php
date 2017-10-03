<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>emmpty ji</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<div class="page-header" style="background-color: red">
			@yield('header')
		</div>
		@if (Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success')}}
			</div>
		@endif
		@yield('content')
	</div>
</body>
</html>
