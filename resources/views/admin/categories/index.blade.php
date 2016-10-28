@extends('layouts.admin')
@section('content')

<h1>Categories</h1>
<br>
<div class="col-md-6">

    {!! Form::open(['method'=>'Post','action'=>'AdminCategoriesController@store']) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
            {!! Form::SUBMIT('Create Category',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

</div>

<div class="col-md-6">
    @if($categories)
        <table class="table table-hover">
            <thead>
            <tr>
                <th>S No.</th>
                <th>Name</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at?$category->created_at->diffForHumans():'No Date'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@stop