<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() 
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return view('category.index', compact('categories'));
    }

    public function show($id) 
    {
        $category = Category::where('id', '=', $id)
            ->with()
            ->first();

            return view('category.show', compact('category'));
    }
}
