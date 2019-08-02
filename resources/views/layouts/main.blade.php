<!DOCTYPE html>

<html class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vessels In Clay</title>

<link rel="stylesheet" href="/compile/styles/styles.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display&display=swap" rel="stylesheet">

</head>
<body>


<nav class="navTop">
	<div class="navTop__logo">
		<img class="navTop__logoImg" src="/images/logo.svg" alt="">
	
	<div class="navTop__Links">	
			<li><b><a> </a></b></li>
			<li><a href="http://vic/">Home</a></li>
			 <?php if (Auth::check()): ?>
			 	<li><a href="/gallery/create">Create Gallery</a></li>
			 	<li><a href="/logout">Logout</a></li>		
			 <?php endif ?>
			 <?php if (!Auth::check()): ?>
			 	<li><a href="/login">Login</a></li>
				<li><a href="/register">Artisans</a></li>	
				<li><b><a> </a></b></li>
			 <?php endif ?>
	</div>
	<div class="navTop__Glyphs">
		
		<img class="navTop__Glyphs__svg--lg" src="/images/bowl1.svg" alt="">
		<img class="navTop__Glyphs__svg" src="/images/bowl2.svg" alt="">
		<img class="navTop__Glyphs__svg" src="/images/vase1.svg" alt="">
		
	</div>
	</div>
</nav>




@if(Session::has('message')){{
	Session::get('message')
}}
@endif

@yield('content')




</body></html>