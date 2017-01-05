@extends('layouts.admin')


@section('content')

    <h1>Categories</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Category', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($categories)

            @foreach($categories as $category)

                <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{url('admin/categories', $category->id)}}/edit">{{$category->name}}</a></td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td>{{$category->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>


@stop