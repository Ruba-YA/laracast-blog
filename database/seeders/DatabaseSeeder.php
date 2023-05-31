<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

// User::truncate();
// Post::truncate();
// Category::truncate();

//        $user= User::factory()->create();

//         $personal=Category::create([
//             'name'=>'Personal',
//             'slug'=>'personal'
//         ]);  
        
        
//        $family= Category::create([
//             'name'=>'Family',
//             'slug'=>'family'
//         ]); 
        
//         $work=Category::create([
//             'name'=>'Work',
//             'slug'=>'work'
//         ]);


//         Post::create([
//             'user_id'=>$user->id,
//             'category_id'=>$family->id,
//             'title'=>'my Family Post',
//             'slug'=>'my-family-post',
//             'excerpt'=>'<p>Lorem Ipsum is simply dummy </p>',
//             'body'=>'<p>Lorem Ipsum is simply dummy t of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>'
//         ]);

//         Post::create([
//             'user_id'=>$user->id,
//             'category_id'=>$work->id,
//             'title'=>'my Work Post',
//             'slug'=>'my-work-post',
//             'excerpt'=>'<p>Lorem Ipsum is simply dum</p>',
//             'body'=>'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>'
//         ]);
        
$user= User::factory()->create([
    'name'=>'ruba'
]);
Post::factory(5)->create([
    'user_id' => $user->id

]);
    }

}
