@extends('layouts.admin')


@section('content')

    <h1>Edit User</h1>

    <div class="row">

        <div class="col-xs-5 col-md-3">
            <img height="400" width="400" src="http://localhost:82/app/public{{$user->photo ? $user->photo->file : '/images/default.jpg'}}" class="img-responsive img-rounded">
        </div>

        <div class="col-xs-1 col-md-9">

            {!! Form::model($user,['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'enctype'=>'multipart/form-data']) !!}

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
                {!! Form::select('role_id', $roles, null, ['class'=> 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'),null, ['class'=> 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=> 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password',  ['class'=> 'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit('Update User', null, ['class'=> 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete User', null, ['class'=> 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            @include('includes.validation')
        </div>
    </div>






@stop