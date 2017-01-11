@extends('layouts.main')


@section('content')


    @if($posts)

        @foreach($posts as $post)


            <div class="well" style="padding-bottom: 28px;background-color: snow;">
                <h3><a href="{{url('post',$post->id)}}">{{$post->title}}</a></h3>
                <div class="row">
                    <div class="col-lg-2">
                        <img src="http://localhost:82/app/public{{$post->photo ? $post->photo->file : '/images/default.jpg'}}" class="img-thumbnail">
                    </div>
                    <div class="col-lg-10">
                        <p>{{$post->body}}</p>
                    </div>
                </div>
                <div style="float: right;">Published at : {{$post->created_at}} </div>
            </div>

            @endforeach
    @endif

@stop

