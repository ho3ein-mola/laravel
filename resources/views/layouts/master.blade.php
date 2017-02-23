<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" href="{{ URL::to("/css/dashboard-style.css") }}">
</head>
<body>
@include('includes.header')
	<div class="container">
		@yield('content')
	</div>
	<script type="text/javascript" src="/js/app.js" ></script>
</body>
</html>