<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostsNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::latest()->get();
        // $posts = Post::orderBy('id','desc')->get();
        //$posts = Post::all();

        $posts = Post::latest();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        if ($file = $request->file('file')){

          $name=$file->getClientOriginalName() ;

          $file->move('images',$name);

          $input['path']=$name;

                  }

        Post::create($input);

       return redirect('/posts');


//        $file = $request->file('file');
//
//        echo "<br>";
//
//        echo $file->getClientOriginalName();
//
//        echo "<br>";
//
//        echo $file->getClientSize();

//        $this->validate($request,[
//
//            'title'=>'required|max:20',
//            'content'=>'required'
//
//        ]);
//
//        $input = $request->all();
//
//        Post::create($input);
//
//        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $input = $request->all();

        Post::whereId($id)->first()->update($input);

        return redirect('/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/posts');

    }
}
