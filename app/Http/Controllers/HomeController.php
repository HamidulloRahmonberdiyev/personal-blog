<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with([
            'users' => User::all(),
            'portfolios' => Portfolio::all(),
            'appeals' => Appeal::all(),
            'skills' => Skill::all(),
        ]);
    }
}
