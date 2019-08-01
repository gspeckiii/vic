@extends('layouts/main')
@section('content')





<div class="galleryBody">
	<a href="/gallery/show/{{$photos->gallery_id}}">Back to portfolio</a>
<h1>{{$photos->title}}</h1>
<p class="lead">{{$photos->description}}</p>
<p class="lead">{{$photos->location}}</p>


<img class="proimage" src="/images/{{$photos->image}}" alt="">
<?php if (Auth::check()): ?>
<p><a style="text-align:center" href="/photo/edit/{{$photos->id}}" >Edit Portfolio</a></p>
<p><a style="text-align:center" href="/photo/destroy/{{$photos->id}}/{{$photos->gallery_id}}" onclick="return confirm('Are you sure?')">Delete Portfolio</a></p>

<?php endif; ?>

</div>
@stop