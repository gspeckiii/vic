@extends('layouts/main')
@section('content')

<div class="wrapper">
<h1>Connect to the past</h1>
<h2>Give our future a cup to drink from</h2>
<h3>collect in thy Clay today...</h3>
<h4>Modern Artifacts</h4>
<h5>Become a Vessel in Clay Patron today</h5>
<p class="">Create your own online ceramic collection page and show the world all the beautiful ceramic artifacts you own</p>




<div class="">
	<?php foreach ($gallery as $gall):{
		# code...
	} ?>

	<a href="/gallery/show/{{$gall->id}}">
		<img class="thumbnail" src="/images/{{$gall->cover_image}}">
	</a>
<h5>{{$gall->name}}</h5>
<p>{{$gall->description}}</p>
</div>
<?php endforeach; ?>
</div>
@stop
