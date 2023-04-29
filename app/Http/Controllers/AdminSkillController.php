<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSkillController extends Controller
{
    public function index()
    {
        return view('backend.skills.index')->with([
            'skills' => Skill::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.skills.create');
    }

    public function store(StoreSkillRequest $request)
    {
        $path = $request->file('photo')->store('skills', 'public');

        Skill::create([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $path,
        ]);

        return redirect()->route('skills.index')->with('success', "Skill created!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Skill $skill)
    {
        return view('backend.skills.edit')->with([
            'skill' => $skill,
        ]);
    }

    public function update(StoreSkillRequest $request, Skill $skill)
    {
        if (isset($skill->photo)) {
            Storage::delete('public/' . $skill->photo);
        }
        $path = $request->file('photo')->store('skills', 'public');

        $skill->update([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $path,
        ]);

        return redirect()->route('skills.index')->with('success', "Skill changed!");
    }

    public function destroy(Skill $skill)
    {
        if (isset($skill->photo)) {
            Storage::delete('public/' . $skill->photo);
        }
        $skill->delete();

        return redirect()->route('skills.index')->with('success', "Skill deleted!");
    }
}
