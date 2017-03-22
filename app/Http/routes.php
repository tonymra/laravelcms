<?php

use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Tag;
use App\Video;
use App\Taggable;

Use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});

//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts','PostsController');

//Route::get ('/contact','PostsController@contact');

//Route::get('post/{id}','PostsController@show_post');
//Route::get('post/{id}/{name}/{password}','PostsController@show_post');








/*RAW SQL QUERIES*/

//Route::get('/insert', function (){
//
// DB::insert('insert into posts  (title,content) values(?,?)', ['laravel','the coolest programming framework']);
//});

//Route::get('/read', function(){
//
//    $results = DB::select('select * from posts where id = ?',[1]);
//
//
////     foreach ($results as $post){
////
////      return $post->title;
////
////     }
//
//   // return $results;
//
//    return var_dump($results);
//
//
//});



//Route::get('/update', function(){
//
// $updated=DB::update('update posts set title="MakaLulo" where id =?',[1]);
//
// return $updated;
//
//});


//Route::get('/delete', function(){
//
// $deleted=DB::delete('delete from posts where id = ?',[1]);
// return $deleted;
//});













/*Eloquent/ORM Queries*/

//Route::get('/read', function(){
//
////$post =App\Post;
//    $posts = Post::all();
//
//    foreach ($posts as $post){
//
//     return $post->title;
//    }
//
//});
//
//Route::get('/find', function(){
//
////$post =App\Post;
//    $posts = Post::find(2);
//
//
//
//        return $posts->title;
//
//});


//Route::get('/findwhere', function(){
//
// $posts=Post::where('id',2)->orderBy('id','desc')->take(1)->get();
// return $posts;
//});

//Route::get('/findmore', function(){
//
////$posts=Post::findOrfail(12);
////return $posts;
//
//    $posts=Post::where('users_count', '<',50)->firstOrFail();
//
//});

//Route::get('basicinsert', function(){
// $post= new Post;
// $post->title="Mwana akanaka";
// $post->content="simbi yangu iyi";
// $post->save();
//});

//Route::get('basicinsert', function(){
//    $post= Post::find(2);
//    $post->title="mai ulu";
//    $post->content="we are blessed";
//    $post->save();
//});


//Route::get('/create',function(){
//
//  Post::create(['title'=>'cynthia','content'=>'bere'])  ;
//
//});


//Route::get('/update', function(){
//
// Post::where('id',2)->where('is_admin',0)->update(['title'=>'janet ziro', 'content'=>'straight outta gweru']);
//});

//Route::get('/delete',function(){
//
//    $post = Post::find(1);
//
//    $post->delete();
//
//
//
//
//});

//Route::get('/delete2', function(){
//
////Post::destroy(1);
////Post::destroy([2,4]);
////Post::where('id',2)->delete();
//});

//Route::get('/softdelete',function(){
//
//    Post::find(2)->delete();
//});

//Route::get('/readsoftdelete', function(){
//
////  $posts=Post::find(2);
////
////  return $posts;
//
////    $posts = Post::withTrashed()->where('id',2)->get();
////
////    return $posts;
//
////        $posts = Post::onlyTrashed()->where('id',2)->get();
////
////    return $posts;
//
//
//    $posts = Post::withTrashed()->where('is_admin',0)->get();
//
//    return $posts;
//
//});

//Route::get('/restore', function(){
//
//    Post::withTrashed()->where('is_admin',0)->restore();
//
//
//});

//







/*ELOQUENT RELATIONSHIPS*/


//One to one relationship
//Route::get('/user/{id}/post', function ($id){

//return User::find($id)->post;
//    return User::find($id)->post->title;
//});



/*ONE TO MANY*/

//Route::get('/posts', function(){
//
//$user = User::find(1);
//
//foreach ($user->posts as $post) {
//
//    echo $post->title."<br>";
//}
//});


/*MANY TO MANY*/


//Route::get('/user/{id}/role', function($id){
//
// $user=User::find($id)->roles()->orderBy('id','desc')->get();
//
// return $user;

// foreach ($user->roles as $role){
//
//     return $role->name;
//
// }

//});


// Accessing the intermedieate table/pivot table

//Route::get('/user/pivot', function(){
//
//    $role =Role::find(1);
//
//    foreach ($role->users as $role) {
//
//      echo $role->pivot->created_at;
//    }
//});
//
//
//Route::get('/role/{id}/user', function($id){
//
//    $role =Role::find($id);
//
//    foreach ($role->users as $user){
//
//     return $user->name;
//    }
//});

//Has Many Through

//Route::get('/user/country', function(){
//
//$country=Country::find(4);
//
//foreach ($country->posts as $post){
//
//    return $post->title;
//
//
//}
//});


/*POLYMORPHIC RELATIONSHIPS*/

//Route::get('/user/{id}/photo', function($id){
//
//   $photo = User::find($id) ;
//
//   foreach ($photo->photos as $image){
//
//    echo $image->path. "<br>";
//   }
//});
//
//Route::get('/post/{id}/photo', function($id){
//
//    $photo = Post::find($id) ;
//
//    foreach ($photo->photos as $image){
//
//        echo $image->path. "<br>";
//    }
//});

//Find the owner

//Route::get('/photo/{id}/user', function($id){
//
//$photo=Photo::findOrFail($id);
//
//return $photo->imageable;
//
//});


//POLYMORPHIC MANY TO MANY

//Route::get('/post/tags', function(){
//
//   $posts=Post::find(1);
//
//   foreach ($posts->tags as $tag){
//
//    echo $tag->name;
//   }
//});
//
//
//Route::get('/video/tags', function(){
//$videos=Video::find(1);
//
//    foreach ($videos->tags as $tag){
//
//        echo $tag->name;
//    }
//});

// Finding the owner

//Route::get('/tag/post', function(){
//
// $tags = Tag::find(2) ;
//
// foreach ($tags->posts as $post){
//
//     echo $post->title;
// }
//
//});
//
//Route::get('/tag/video', function(){
//
//    $tags = Tag::find(1) ;
//
//    foreach ($tags->videos as $video){
//
//        echo $video->name;
//    }
//
//});



/*BASIC CRUD APPLICATION*/


Route::resource('/posts','PostsNewController');

Route::get('/dates', function(){

    $date = new DateTime('+1 week');

    echo $date->format('m-d-Y');

    echo "<br>";

    echo Carbon::now();

    echo "<br>";

    echo Carbon::now()->diffForHumans();

    echo "<br>";

    echo Carbon::now()->addDays(10)->diffForHumans();

    echo "<br>";

    echo Carbon::now()->subMonths(5)->diffForHumans();

    echo "<br>";

    echo Carbon::now()->yesterday()->diffForHumans();

});


//Accessor

Route::get('/getname', function(){

    $user = User::findOrFail(1);

    echo $user->name;


});


//Mutator

Route::get('/setname', function(){

    $user = User::findOrFail(1);

    $user->name = "ululutho";

    $user->save();


});

