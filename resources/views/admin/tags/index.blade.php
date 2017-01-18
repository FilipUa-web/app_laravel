@extends('layouts.admin')


@section('content')


    @if(Session::has('deleted_user'))
        <p class="bg-success" style="padding: 15px">{{session('deleted_user')}}</p>
    @endif


    {!! Form::open(['method'=>'POST', 'action'=> 'AdminTagController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Tag', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <h1>Tags</h1>


    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($tags)

            @foreach($tags as $tag)

            <tr>
                <td>{{$tag->id}}</td>
                <td><a href="{{url('admin/tags', $tag->id)}}/edit">{{$tag->name}}</a></td>
                <td>{{$tag->created_at->diffForHumans()}}</td>
                <td>{{$tag->updated_at->diffForHumans()}}</td>
            </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@stop