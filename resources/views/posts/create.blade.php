@extends('layouts.app')


@section('header')

    <h2>Create</h2>

@stop





@section('content')

    <h3><a href="/posts">Home</a></h3>

    {{--  <form method="post" action="/posts" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Title:</label>
            <input type="text" class="form-control" name ="title" id="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Type the content">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form> --}}

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>


    {!! Form::open(['method'=>'POST' ,'action'=>'PostsNewController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null,
            array('class'=>'form-control',
                  'placeholder'=>'Enter the title')) !!}
    </div>





    <div class="form-group">
        {!! Form::label('content','Content') !!}
        {!! Form::textarea('content', null,
            array('class'=>'form-control',
                  'placeholder'=>'Type the content')) !!}
    </div>


    <div class="form-group">
        {!! Form::label('file','Upload File') !!}
        {!! Form::file('file',['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}



@endsection






@section('footer')

    <h5>Basic CRUD Application</h5>

@stop