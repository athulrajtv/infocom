<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Addcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddcourseshowController extends Controller
{
    public function Addcourseshow(Request $request, $id)
    {
        $record = Addcourse::where('course_id', $id)->get();

        // If no records found, return with an error message
        if ($record->isEmpty()) {
            return redirect()->back()->with('error', 'No courses found for this category');
        }

        $data = DB::table('categories')->orderBy('number', 'asc')->get();
        return view('guest.pages.course', compact('data', 'record'));
    }
}
