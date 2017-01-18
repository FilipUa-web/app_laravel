@extends('layouts.admin')


@section('content')

    <h1>Tag</h1>

    {!! Form::model($tag,['method'=>'PATCH', 'action'=> ['AdminTagController@update',$tag->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Tag', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTagController@destroy', $tag->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Tag', null, ['class'=> 'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}

@stop