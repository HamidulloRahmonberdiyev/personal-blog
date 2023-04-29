<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use Illuminate\Http\Request;

class AdminFilterController extends Controller
{
    public function filter_appeal(Request $request)
    {
        if ($request->status <= 1) {
            $appeals = Appeal::where([
                ['status', '=', $request->status],
                [function ($query) use ($request) {
                    if (($filter = $request->status)) {
                        $query->orWhere('status', 'LIKE', '%' . $filter . '%')->get();
                    }
                }]
            ])->paginate(10);
        } else {
            $appeals = Appeal::paginate(10);
        }

        return view('backend.appeals.index')->with([
            'appeals' => $appeals,
        ]);
    }
}
