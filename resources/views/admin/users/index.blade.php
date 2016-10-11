@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
    @if($users)
        @if(Session::has('deleted_user'))
            <p class="bg-danger">{{session('deleted_user')}}</p>
        @endif
        <table class="table table-hover">
            <thead>
            <tr>
                <th>S No.</th>
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

        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo?$user->photo->file:'https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150'}}" alt=""/></td>
                <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    @endif
@stop