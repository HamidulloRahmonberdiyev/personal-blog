<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppealRequest;
use App\Models\Appeal;
use App\Models\Category;
use App\Models\File;
use App\Models\People;
use App\Models\Portfolio;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main')->with([
            'people' => People::latest()->get()->take(1),
            'resumes' => Resume::all(),
            'categories' => Category::all(),
            'portfolios' => Portfolio::paginate(6),
            'skills' => Skill::paginate(6),
            'appeals' => Appeal::latest()->get()->take(10),
            'files' => File::all(),
        ]);
    }

}
