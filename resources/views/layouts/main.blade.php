<!DOCTYPE html>

<html class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vessels In Clay</title>

<link rel="stylesheet" href="/compile/styles/styles.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display&display=swap" rel="stylesheet">

</head>
<body>


<div class="navTop">
	<div class="navTop__logoDiv">
		<img class="navTop__logo"src="/images/logo.svg" alt="">
	</div>
	<div class="navTop__Links">
		<ul>
			<li><a href="http://vic/">Home</a></li>
			<li><a href="/gallery/create">Create Gallery</a></li>
			<li><a href="/login">Login</a></li>
			<li><a href="/register">Register</a></li>
		</ul>
	</div>
</div>

@if(Session::has('message')){{
	Session::get('message')
}}
@endif

@yield('content')




</body></html>