@extends('layouts.app')


@section('header')

    <h2>Basic CRUD Application</h2>

@stop





@section('content')


    <h2>Records List</h2>
    <h5><a href="/posts/create">Add New</a></h5>
    <table class="table table-bordered">
        <thead>


        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

        <tr>
            <td>1</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td><img height ="100" src="{{$post->path}}" alt="No Image"></td>
            <td>
                <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                <a href="{{route('posts.show',$post->id)}}">View</a>

                {!! Form::open(['method'=>'DELETE' ,'action'=>['PostsNewController@destroy',$post->id]]) !!}
                    {{ csrf_field() }}

                {!! Form::submit('Delete',
                          array('class'=>'btn btn-danger')) !!}


                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>



@endsection






@section('footer')

<h5>Basic CRUD Application</h5>

@stop