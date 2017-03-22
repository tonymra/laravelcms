@extends('layouts.app')


@section('header')

    <h2>Update</h2>

@stop





@section('content')



    {{-- <form method="post" action="/posts/{{$post->id}}">

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="email">Title:</label>
            <input type="text" class="form-control" name ="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" class="form-control" name="content" id="content" value="{{$post->content}}">
        </div>

        <button type="submit" class="btn btn-default">Update</button>
    </form>--}}



    {!! Form::model($post,['method'=>'PATCH' ,'action'=>['PostsNewController@update',$post->id]]) !!}

    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null,
            array(
                  'class'=>'form-control',
                  'placeholder'=>'Enter the title')) !!}
    </div>



    <div class="form-group">
        {!! Form::label('content','Content') !!}
        {!! Form::textarea('content', null,
            array(
                  'class'=>'form-control',
                  'placeholder'=>'Type the content')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}




@endsection






@section('footer')

    <h5>Basic CRUD Application</h5>

@stop