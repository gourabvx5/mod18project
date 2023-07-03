<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index',[
            'category' => $category
        ]);

    }

    
}
