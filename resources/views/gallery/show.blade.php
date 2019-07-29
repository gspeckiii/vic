@extends('layouts/main')
@section('content')
<div class="callout primary">
<article class="grid-container">
<div class="">
	<p><a href="/">Back to Portfolio</a></p>
<h1>{{$gallery->name}}</h1>
<p class="lead">{{$gallery->description}} </p>
<a href="/photo/create/{{$gallery->id}}">Upload Portfolio</a>
</div>
</article>
</div>
<article class="grid-container">
<div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">

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
