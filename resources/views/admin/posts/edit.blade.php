@extends('layouts.admin')
@section('content')
    <h1>Create Post</h1>
    <div class="row">

        <div class="col-sm-3 container">
            <img src="{{$post->photo?$post->photo->file:'https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150'}}"  class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">
        {!! Form::model($post,['method'=>'Patch','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category','Category') !!}
            {!! Form::select('category_id',[''=>'Choose Options']+$categories,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo','Photo') !!}
            {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Description') !!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>
        <div class="row">
        <div class="form-group col-md-1 pull-right">
            {!! Form::SUBMIT('Edit Post',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
            {!! Form::model($post,['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
            <div class="form-group pull-right">
                {!! Form::SUBMIT('Delete Post',['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>
    <div class="row">
        @include('includes.form_error')
    </div>
@stop