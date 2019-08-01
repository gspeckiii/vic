@extends('layouts/main')
@section('content')


<div class="galleryBody">
<h1>Vessels In Clay Gallery</h1>
<p class="lead"><b>Create</b> your own online <b>ceramic </b>gallery and start uploading your <b> work.</b> </p>


{!! Form::open(array('action' => 'GalleryController@store','enctype' => 'multipart/form-data'))!!}

{!! Form::label('name','Name')!!}
{!! Form::text('name',$value=null,$attributes=['placeholder'=>'Gallery Name','name'=>'name','required'=>'required'])!!}

{!! Form::label('description','Description')!!}
{!! Form::text('description',$value=null,$attributes=['placeholder'=>'Gallery Description','description'=>'description','required'=>'required'])!!}

{!! Form::label('cover_image','Cover Image')!!}
{!! Form::file('cover_image')!!}
{!! Form::submit('Submit',$attributes=['class'=>'button'])!!}


{!! Form::close()!!}

</div>
@stop