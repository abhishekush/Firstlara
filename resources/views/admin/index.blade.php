@extends('layouts.admin')
@section('content')
    {!! Form::open(['method'=>'Post','action'=>'AdminUsersController@store']) !!}
    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::SUBMIT('Create Post',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop