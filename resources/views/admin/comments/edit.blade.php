@extends('layouts.admin')


@section('content')

    <h1>Comments</h1>

    <div class="row">

        <div class="col-xs-1 col-md-9">

            {!! Form::model($comment,['method'=>'PATCH', 'action'=> ['AdminCommentsController@update', $comment->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('approved', 'Approved:') !!}
                {!! Form::select('approved', array('1' => 'Yes', '0'=>'No'), null, ['class'=> 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Comment', null, ['class'=> 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminCommentsController@destroy', $comment->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Comment', null, ['class'=> 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            @include('includes.validation')
        </div>
    </div>






@stop