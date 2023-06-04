<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);
// ->where('post','[A-z_\-.]+')



Route::get('categories/{category:slug}',function(Category $category)
{

    return view('posts' , [
        'posts' =>$category ->posts,
        'categories'=>Category::all(),
        'currentCategory'=>$category

    ]);
});
// ->load(['category','auther'])


Route::get('authers/{auther:username}',function(User $auther)
{
// ddd($auther);
    return view('posts' , [
        'posts' =>$auther->posts,
        'categories'=>Category::all()

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
