@extends('layouts.admin')
@section('content')

    <h1>Categories</h1>
    <br>
    <div class="col-md-6">

        {!! Form::model($category,['method'=>'Patch','action'=>['AdminCategoriesController@update',$category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::SUBMIT('Update Category',['class'=>'btn btn-primary col-sm-6']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]])!!}
        <div class="form-group">
            {!! Form::SUBMIT('Delete Category',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}

    </div>

@stop