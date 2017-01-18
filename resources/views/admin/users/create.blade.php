@extends('layouts.admin')


@section('content')

    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id',array(''=>'Chose options') + $roles, null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'),0, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        <div class="row">
            <div class="col-lg-6">
                {!! Form::hidden('photo_id', null, ['id'=> 'photo_id']) !!}
                {!! Form::file('photo_id', null, ['class'=> 'form-control']) !!}
            </div>
            <div class="col-lg-6">

                <a href="#" data-toggle="modal" data-target=".pop-up-1" class="btn btn-default">Upload from server</a>
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password',  ['class'=> 'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create User', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.popup')
    @include('includes.validation')


@stop