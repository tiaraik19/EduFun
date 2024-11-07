<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryById($id){
        $category = Category::with('articles')->find($id);
        return view('main.category', ['category' => $category]);
    }
}

