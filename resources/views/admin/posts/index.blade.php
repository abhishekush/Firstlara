@extends('layouts.admin')
@section('content')
    <h1>Posts</h1>
    @if(Session::has('deleted_post'))
        <p class="bg-danger">{{session('deleted_post')}}</p>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th>S No.</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img height="50" src="{{$post->photo?$post->photo->file:'https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150'}}" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category?$post->category->name:"Uncategorized"}}</td>
                <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                <td>{{str_limit($post->body,30)}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
@stop