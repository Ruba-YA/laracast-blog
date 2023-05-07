<?php


namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\file;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post{


    public $title;
    public $date;
    public $excerpt;

    public $body;
    public $slug;

    public function __construct( $title , $date,$excerpt,$body,$slug){
        $this->title=$title;
        $this->date=$date;
        $this->excerpt=$excerpt;
        $this->body=$body;
        $this->slug=$slug;
    }
    public static function all ()
    {
return cache()->rememberForever('posts.all',function(){

    return collect(File::files(resource_path("posts")))// Find all the files in the posts directory and collect thm into a collection 
    ->map(function($file){//map over each item 
    return YamlFrontMatter::parseFile($file);// parse each file into a document 
    })
    ->map(function($document){// one you have a collection of documents map over second time and this time build our own post object
    
        return new Post(
    
            $document->title,
            $document->date,
            $document->excerpt,
            $document->body(),
            $document->slug
        );
    })->sortByDesc('date');

});

    }
    public static function find($slug)
    {
        // if (!file_exists($path= resource_path("posts/{$slug}"))){
        //            throw new ModelNotFoundException();
        //         }
            
        //         $post =   cache()->remember("posts.{$slug}",5,function() use($path){
        //     // var_dump('file_get_contents');
        //     return  file_get_contents($path);
            
        //         });
            
            
            
        //         return view('post',[
            
        //             'post' => $post
        //         ]); 


        # another way 

        // find all the blog post , find a one with a slug that matches the one that was requested(in fun)

        return static::all()->firstWhere('slug' ,$slug);
    }
}