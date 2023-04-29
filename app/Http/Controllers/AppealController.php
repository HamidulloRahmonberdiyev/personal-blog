<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppealRequest;
use App\Models\Appeal;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function store(StoreAppealRequest $request)
    {
        Appeal::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', "You're appeal send!");
    }
}
