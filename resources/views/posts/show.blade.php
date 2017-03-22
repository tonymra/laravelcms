@extends('layouts.app')


@section('header')

    <h2>Show/View</h2>

@stop





@section('content')
<h3><a href="/posts">Home</a></h3>

     <form>



        <div class="form-group">
            <label for="email">Title:</label>
            <input type="text" class="form-control" name ="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" class="form-control" name="content" id="content" value="{{$post->content}}">
        </div>


    </form>




@endsection






@section('footer')

    <h5>Basic CRUD Application</h5>

@stop