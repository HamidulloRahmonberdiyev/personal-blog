<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use Illuminate\Http\Request;

class AdminAppealController extends Controller
{
    public function index()
    {
        return view('backend.appeals.index')->with([
            'appeals' => Appeal::latest()->paginate(10),
        ]);
    }

    public function show(Appeal $appeal)
    {
        return view('backend.appeals.show')->with([
            'appeal' => $appeal,
        ]);
    }

    public function update(Request $request, Appeal $appeal)
    {
        $appeal->update([
            'status' => '1',
        ]);

        return redirect()->route('appeals.index')->with('success', "Appeal checked!");
    }

    public function destroy(Appeal $appeal)
    {
        $appeal->delete();

        return redirect()->route('appeals.index')->with('success', "Appeal deleted!");
    }
}
