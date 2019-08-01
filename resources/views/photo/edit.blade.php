@extends('layouts/main')
@section('content')



<div class="galleryBody">

{!! Form::open(array('action' => 'PhotoController@updateData','enctype' => 'multipart/form-data'))!!}
<input type="hidden" name="id" value="{{$photos->id}}">
{!! Form::label('title','Title')!!}
{!! Form::text('title',$value=$photos->title,$attributes=['title'=>'title','required'=>'required'])!!}

{!! Form::label('description','Description')!!}
{!! Form::text('description',$value=$photos->description,$attributes=['description'=>'description','required'=>'required'])!!}

{!! Form::label('location','Location')!!}
{!! Form::text('location',$value=$photos->location,$attributes=['location'=>'location','required'=>'required'])!!}
<div class="upnew">
	{!! Form::label('image','Portfolio Image')!!}
{!! Form::file('image')!!}
</div>
<div class="previmg">
	<img src="/images/{{$photos->image}}" alt="">
</div>

<input type="hidden" name="gallery_id" value="{{$photos->gallery_id}}">
{!! Form::submit('Update',$attributes=['class'=>'button'])!!}


{!! Form::close()!!}
</div>

@stop