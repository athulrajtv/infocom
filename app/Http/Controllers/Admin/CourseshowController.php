<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseshowController extends Controller
{
    public function Show(Request $request, $id)
    {
        $record = Course::find($id);
        // Check if the record exists
        if (!$record) {
            return redirect()->back()->with('error', 'Record not found');
        }
        $items = DB::table('contents')->get();
        return view('guest.pages.course-details', compact('record','items'));
    }
}
