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






    <hr>
    @foreach($post->comments as $comment)
        <!-- Posted Comments -->
    <div class="media">
        <a class="pull-left" href="#">
            <img class="img-circle" height="40" width="40" class="media-object" src="{{url($comment->photo ? $comment->photo->file : '/images/default.jpg')}}" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">{{$comment->name}}
                <small>{{$comment->created_at}}</small>
            </h4>
            {{$comment->comment}}
        </div>
    </div>
            <!-- Blog Comments -->


        <!-- Comment -->


    @endforeach

    <hr>

    <!-- Comments Form -->

    {!! Form::open(['method'=>'POST', 'action'=> ['CommentsController@store',$post->id]]) !!}

    <div class="row">
        @if(!$check)
        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=> 'form-control' ]) !!}
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class'=> 'form-control' ]) !!}
            </div>
        </div>
        @endif
        @if($check)
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::hidden('name', Auth::user()->name, ['class'=> 'form-control' ]) !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::hidden('email', Auth::user()->email, ['class'=> 'form-control']) !!}
                    </div>
                </div>

                        {!! Form::hidden('photo_id', Auth::user()->photo_id, ['class'=> 'form-control']) !!}


        @endif
        <div class="col-lg-12">
            <div class="form-group">
                {!! Form::label('comment', 'Comment:') !!}
                {!! Form::textarea('comment', null, ['class'=> 'form-control' , 'rows'=>'5']) !!}
            </div>
       </div>
        <div class="form-group">
            {!! Form::submit('Add comment', null, ['class'=> 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    @include('includes.validation')
@stop