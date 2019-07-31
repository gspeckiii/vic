@extends('layouts/main')
@section('content')

<div class="callout primary">
<article class="grid-container">
<div class="">
	<a href="/gallery/show/{{$photos->gallery_id}}">Back to portfolio</a>
<h1>{{$photos->title}}</h1>
<p class="lead">{{$photos->description}}</p>
<p class="lead">{{$photos->location}}</p>
</div>
</article>
</div>

<div class="maindiv">
<img class="proimage" src="/images/{{$photos->image}}" alt="">
<p><a style="text-align:center" href="/photo/destroy/{{$photos->id}}/{{$photos->gallery_id}}">Delete Portfolio</a></p>
</div>
@stop