@extends('layouts/main')
@section('content')

<div class="galleryBody">
<h1>Vessels In Clay Gallery</h1>
<p class=""><b>Create</b> your own online <b>ceramic </b>gallery and start uploading your <b> work.</b> </p>




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
