<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::with('children')->findOrFail($id);
        // Show category and possibly its subcategories
        return view('categories.show', compact('category'));
    }

    // You can implement create/store/edit/update/destroy as needed
}
