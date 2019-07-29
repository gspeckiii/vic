<!DOCTYPE html>

<html class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vessels In Clay</title>
<link rel="stylesheet" href="/css/foundation.min.css">
<link rel="stylesheet" href="/css/main.css">



<meta class="foundation-mq"></head>
<body>

<div class="off-canvas position-left reveal-for-large is-transition-push" id="my-info" data-off-canvas="" aria-hidden="false" data-e="7hb254-e">
<div class="grid-y grid-padding-x" style="height: 100%;">
<br>
<div class="cell shrink">

</div>
<div class="cell auto">
<h5 class="menutitle">Main Menu</h5>
<ul class="side-nav mynav">
	<li><a href="http://vic/">Home</a></li>
	<li><a href="/gallery/create">Create Gallery</a></li>
	<li><a href="/login">Login</a></li>
	<li><a href="/register">Register</a></li>
</ul>
</div>
</div>
</div><div class="js-off-canvas-overlay is-overlay-fixed"></div>
<div class="off-canvas-content has-reveal-left" data-off-canvas-content="">
<div class="title-bar hide-for-large">
<div class="title-bar-left">
<button class="menu-icon" type="button" data-toggle="my-info" aria-expanded="false" aria-controls="my-info"></button>
<span class="title-bar-title">Mike Mikerson</span>
</div>
</div>
@if(Session::has('message')){{
	Session::get('message')
}}
@endif

@yield('content')
</div>
</div>
<hr>

</div>

<script>
      $(document).foundation();
    </script>


</body></html>