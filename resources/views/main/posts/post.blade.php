@extends('layouts.main')


@section('content')

<h1>{{$post->title}}</h1>

<!-- Author -->


<hr>

<!-- Date/Time -->
<p><span class="glyphicon glyphicon-time">Published at : </span>{{$post->created_at}}</p>

<hr>

<!-- Preview Image -->
<img height="400" width="400" src="http://localhost:82/app/public{{$post->photo ? $post->photo->file : '/images/default.jpg'}}" class="img-responsive img-rounded">

<hr>

<!-- Post Content -->
<p>{{$post->body}}</p>
@stop