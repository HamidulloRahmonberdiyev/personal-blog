<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        return view('backend.portfolios.index')->with([
            'portfolios' => Portfolio::paginate(8),
        ]);
    }

    public function create()
    {
        return view('backend.portfolios.create')->with([
            'categories' => Category::all(),
        ]);
    }

    public function store(StorePortfolioRequest $request)
    {
        $path = $request->file('photo')->store('portfolios', 'public');
        
        Portfolio::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'link' => $request->link,
            'photo' => $path,
        ]);

        return redirect()->route('portfolios.index')->with('success', "Portfolio created!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Portfolio $portfolio)
    {
        return view('backend.portfolios.edit')->with([
            'portfolio' => $portfolio,
            'categories' => Category::all(),
        ]);
    }

    public function update(StorePortfolioRequest $request, Portfolio $portfolio)
    {
        if (isset($request->photo)) {
            Storage::delete('public/' . $portfolio->photo);
        }
        $path = $request->file('photo')->store('portfolios', 'public');

        $portfolio->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'link' => $request->link,
            'photo' => $path,
        ]);

        return redirect()->route('portfolios.index')->with('success', "Portfolios changed!");
    }

    public function destroy(Portfolio $portfolio)
    {
        if (isset($portfolio->photo)) {
            Storage::delete('public/' . $portfolio->photo);
        }
        $portfolio->delete();
        
        return redirect()->route('portfolios.index')->with('success', "Portfolio deleted!");
    }
}
