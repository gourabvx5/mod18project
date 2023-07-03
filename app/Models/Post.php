<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['category_name'];

    public function category(){
        return $this->belongsTo('Category','cateory_id','id');
    }

    public static function getTotalPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
}
