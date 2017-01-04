@extends('layouts.admin')


@section('content')

    <h1>Users</h1>


    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td><img height="30" width="30" src="http://localhost:82/app/public{{$user->photo ? $user->photo->file : '/images/default.jpg'}}" class="img-responsive img-rounded"></td>
                <td><a href="{{url('admin/users', $user->id)}}/edit">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id == null ? 'User has no role' : $user->role->name }}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@stop