@extends('layouts.admin')


@section('content')


    <h1>Comments</h1>


    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Approved</th>
            <th>Post title</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($comments)

            @foreach($comments as $comment)

                <tr>
                    <td>{{$comment->id}}</td>
                    <td><a href="{{url('admin/comments', $comment->id)}}/edit">{{$comment->name}}</a></td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->approved}}</td>
                    <td>{{$comment->post->title}}</td>
                    <td>{{$comment->created_at->diffForHumans()}}</td>
                    <td>{{$comment->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@stop