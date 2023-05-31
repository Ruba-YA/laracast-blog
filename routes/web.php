<?php

use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\support\Facades\File;
use PhpParser\Builder\Function_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

//     \Illuminate\Support\Facades\DB::listen(Function($query)
//     {
// // \iluminate\support\Facades\Log::info('foo');
// Logger($query->sql);

    // });

// $files = File::files(resource_path("posts"));// fetch all files from posts directory

#simple PHP 

// $posts=[];
// foreach($files as $file){
//     $document = YamlFrontMatter::parseFile($file);
    
//     // ddd($document);
//     $posts []= new Post(

//         $document->title,
//         $document->date,
//         $document->excerpt,
//         $document->body(),
//         $document->slug
//     );
 
// //  ddd($document);
// }


#Using array_map

// $posts= array_map(function($file){
//     $document = YamlFrontMatter::parseFile($file);

// return  new Post(

//     $document->title,
//     $document->date,
//     $document->excerpt,
//     $document->body(),
//     $document->slug
// );


// },$files);

#Using collection 


    return view('posts' , [
        'posts' =>Post::latest()->get()
    ]);
});
Route::get('/posts/{post:slug}',function(Post $post){
    // return $slug;
// Find a post by it slug and pass it to a view called post 
return view('post',[
'post' => $post]);
});
// ->where('post','[A-z_\-.]+')



Route::get('categories/{category:slug}',function(Category $category)
{

    return view('posts' , [
        'posts' =>$category ->posts
    ]);
});
// ->load(['category','auther'])


Route::get('authers/{auther:username}',function(User $auther)
{
// ddd($auther);
    return view('posts' , [
        'posts' =>$auther->posts
    ]);
});











//     $path = __DIR__."/../resources/posts/{$slug}";
//     // check if file exists
//     if (!file_exists($path)){
//         return redirect('/');
//     }

//     $post =   cache()->remember("posts.{$slug}",5,function() use($path){
// var_dump('file_get_contents');
// return  file_get_contents($path);

//     });



//     return view('post',[

//         'post' => $post
//     ]); 

// })->where('post','[A-z_\-.]+');
