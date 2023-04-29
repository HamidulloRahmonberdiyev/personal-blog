<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('backend.categories.index')->with([
            'categories' => Category::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', "Catergory created!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('backend.categories.edit')->with([
            'category' => $category,
        ]);

    }

    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', "Category changed!");
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', "Category changed!");
    }
}
