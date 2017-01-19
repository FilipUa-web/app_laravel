@extends('layouts.admin')


@section('content')



    <h1>Create Post</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id',array(''=>'Chose Category') + $categories , null, ['class'=> 'form-control']) !!}
    </div>
    {!! Form::label('tags', 'Tags:') !!}
    <div class="form-group">
        <select class="form-control select2-multi" name="tags[]"  multiple="multiple">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
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
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=> 'form-control' , 'rows'=>3]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <script type="text/javascript">
        $(".select2-multi").select2();
    </script>

    @include('includes.popup')
    @include('includes.validation')



@stop





