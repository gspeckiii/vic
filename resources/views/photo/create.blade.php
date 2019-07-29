@extends('layouts/main')
@section('content')

<div class="callout primary">
<article class="grid-container">
<div class="">
<h1>Upload portforlio photo to make gallery</h1>
<p class="lead"><b>Create</b> your own online <b>ceramic </b>gallery and start uploading your <b> work.</b> </p>
</div>
</article>
</div>

<div class="">
<div class="maindiv">

{!! Form::open(array('action' => 'PhotoController@store','enctype' => 'multipart/form-data'))!!}

{!! Form::label('title','Title')!!}
{!! Form::text('title',$value=null,$attributes=['placeholder'=>'Portfolio Title','title'=>'title','required'=>'required'])!!}

{!! Form::label('description','Description')!!}
{!! Form::text('description',$value=null,$attributes=['placeholder'=>'Portfolio Description','description'=>'description','required'=>'required'])!!}

{!! Form::label('location','Location')!!}
{!! Form::text('location',$value=null,$attributes=['placeholder'=>'Location Description','location'=>'location','required'=>'required'])!!}

{!! Form::label('image','Portfolio Image')!!}
{!! Form::file('image')!!}
<input type="hidden" name="gallery_id" value="{{$gallery_id}}">
{!! Form::submit('Submit',$attributes=['class'=>'button'])!!}


{!! Form::close()!!}
</div>
</div>
@stop