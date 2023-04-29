<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPeopleController extends Controller
{
    public function index()
    {
        return view('backend.people.index')->with([
            'people' => People::paginate(5),
        ]);
    }

    public function create()
    {
        return view('backend.people.create');
    }

    public function store(StorePeopleRequest $request)
    {
        $path = $request->file('photo')->store('people', 'public');

        People::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthday' => $request->birthday,
            'age' => $request->age,
            'address' => $request->address,
            'job' => $request->job,
            'address' => $request->address,
            'job' => $request->job,
            'level' => $request->level,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'information' => $request->information,
            'photo' => $path,
        ]);

        return redirect()->route('people.index')->with('success', "People created!");
    }

    public function show(People $person)
    {
        return view('backend.people.show')->with([
            'person' => $person,
        ]);
    }

    public function edit(People $person)
    {
        return view('backend.people.edit')->with([
            'person' => $person,
        ]);
    }

    public function update(StorePeopleRequest $request, People $person)
    {
        if (isset($person->photo)) {
            Storage::delete('public/' . $person->photo);
        }
        $path = $request->file('photo')->store('people', 'public');

        $person->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthday' => $request->birthday,
            'age' => $request->age,
            'address' => $request->address,
            'job' => $request->job,
            'address' => $request->address,
            'job' => $request->job,
            'level' => $request->level,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'information' => $request->information,
            'photo' => $path,
        ]);

        return redirect()->route('people.index')->with('success', "People changed!");
    }

    public function destroy(People $person)
    {
        if (isset($person->photo)) {
            Storage::delete('public/' . $person->photo);
        }
        $person->delete();

        return redirect()->route('people.index')->with('success', "Person deleted!");
    }
}
