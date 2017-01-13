@extends('layouts.admin')


@section('content')





    <h1>Posts</h1>


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>

            <th>Title</th>
            <th>body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="30" width="30" src="http://localhost:82/app/public{{$post->photo ? $post->photo->file : '/images/default.jpg'}}" class="img-responsive img-rounded"></td>
                    <td><a href="{{url('admin/posts', $post->id)}}/edit">{{$post->user ? $post->user->name : 'User has deleted'}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized' }}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@stop