@extends('layouts/main')
@section('content')

<div class="galleryBody">
	<p><a href="/">Back to Portfolio</a></p>
<h1>{{$gallery->name}}</h1>
<p class="lead">{{$gallery->description}} </p>
<?php if (Auth::check()): ?>
<a href="/photo/create/{{$gallery->id}}">Upload Portfolio</a>
<?php endif; ?>
	<?php foreach ($photos as $photo):{
		# code...
	} ?>
<div class="cell">
	<a href="/photo/details/{{$photo->id}}">
		<img class="thumbnail" src="/images/{{$photo->image}}">
	</a>
<h5>{{$photo->title}}</h5>
<p>{{$photo->description}}</p>
<p>{{$photo->location}}</p>
</div>
<?php endforeach; ?>

</div>
@stop
