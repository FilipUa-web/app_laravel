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
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::select('tags[]',$tags, null, ['class'=> 'form-control select2-multi', 'multiple'=>'multiple']) !!}
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
        {!! Form::submit('Update Post', null, ['class'=> 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Post', null, ['class'=> 'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}


    <script type="text/javascript">
        $(".select2-multi").select2();
        $(".select2-multi").select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
    </script>
    @include('includes.popup')


@stop

