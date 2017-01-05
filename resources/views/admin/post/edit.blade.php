@extends('layouts.admin')


@section('content')





    <h1>Edit post</h1>


    {!! Form::model($post,['method'=>'PATCH', 'action'=> ['AdminPostsController@update',$post->id], 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id',array(''=>'Chose Category') + $categories , null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=> 'form-control' , 'rows'=>3]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Post', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Post', null, ['class'=> 'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}

@stop