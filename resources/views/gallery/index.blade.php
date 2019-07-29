@extends('layouts/main')
@section('content')
<div class="callout primary">
<article class="grid-container">
<div class="">
<h1>Vessels In Clay Gallery</h1>
<p class="lead"><b>Create</b> your own online <b>ceramic </b>gallery and start uploading your <b> work.</b> </p>
</div>
</article>
</div>
<article class="grid-container">
<div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
	<?php foreach ($gallery as $gall):{
		# code...
	} ?>
<div class="cell">
	<a href="/gallery/show/{{$gall->id}}">
		<img class="thumbnail" src="/images/{{$gall->cover_image}}">
	</a>
<h5>{{$gall->name}}</h5>
<p>{{$gall->description}}</p>
</div>
<?php endforeach; ?>
</div>
@stop
