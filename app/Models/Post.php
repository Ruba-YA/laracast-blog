<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [''];
protected $with = ['category','auther']; // default for every post query you perform 


    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
public function auther(){
    return $this->belongsTo(User::class,'user_id');
}

public function scopeFilter($query , array $filters)
{
    if($filters['search'] ?? false){
        $query->where('title' , 'like','%'.request('search').'%')
        ->orWhere('body' , 'like','%'.request('search').'%');

    }
}

}
