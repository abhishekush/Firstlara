@extends('layouts.admin')
@section('content')
    <h1>Edit User</h1>
    <div class="row">
    <div class="col-sm-3 container">
        <img src="{{$user->photo?$user->photo->file:'https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150'}}"  class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo','Photo') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role','Role') !!}
        {!! Form::select('role_id',[''=>'Choose Options']+$role,Null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('is_active',array('1'=>'Active','0'=>'Not Active'),null,['class'=>'form-control']) !!}
    </div>
    <div class="row pull-right">
    <div class="form-group col-md-5 ">
        {!! Form::SUBMIT('Edit User',['class'=>'btn btn-primary']) !!}
    </div>
        {!! Form::model($user,['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
        <div class="form-group col-md-4">
            {!! Form::SUBMIT('Delete User',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    {!! Form::close() !!}
    </div>
    </div>




    </div>
    <div class="row">
    @include('includes.form_error')
    </div>
@stop