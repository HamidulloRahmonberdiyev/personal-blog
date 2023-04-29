<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Category;
use App\Models\File;
use App\Models\People;
use App\Models\Portfolio;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        return view('main')->with([
            'portfolios' => Portfolio::where('category_id', $category->id)->latest()->paginate(6),
            'people' => People::latest()->get()->take(1),
            'resumes' => Resume::all(),
            'categories' => Category::all(),
            'skills' => Skill::paginate(6),
            'appeals' => Appeal::latest()->get()->take(10),
            'files' => File::all(),
        ]);

    }
}
