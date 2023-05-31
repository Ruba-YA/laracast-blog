<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [''];
protected $with = ['category','auther']; // default for every post query yoy perform 


    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
public function auther(){
    return $this->belongsTo(User::class,'user_id');
}

}
