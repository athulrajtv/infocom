<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Addcourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function Index()
    {
        $course = DB::table('courses')->orderBy('number', 'asc')->get();
        $data = DB::table('certifications')->get();
        $items = DB::table('contents')->get();
        return view('guest.pages.index', compact('course','data','items'));
    }

    public function About()
    {
        $items = DB::table('contents')->get();
        return view('guest.pages.about', compact('items'));
    }

    public function Course()
    {
        $data = DB::table('categories')->orderBy('number', 'asc')->get();
        $record = Addcourse::all();
        $items = DB::table('contents')->get();
        return view('guest.pages.course', compact('data','record','items'));
    }

    public function CourseDetails($id)
    {
        $record = Course::find($id);
        // Check if the record exists
        if (!$record) {
            return redirect()->back()->with('error', 'Record not found');
        }
        $items = DB::table('contents')->get();
        return view('guest.pages.course-details', compact('record','items'));
    }

    public function Gallery()
    {
        $data = DB::table('galleries')->get();
        $record = DB::table('images')->get();
        $items = DB::table('contents')->get();
        return view('guest.pages.gallery', compact('data','record','items'));
    }

    public function Certification()
    {
        $data = DB::table('certifications')->get();
        $items = DB::table('contents')->get();
        return view('guest.pages.certification', compact('data','items'));
    }

    public function Contact()
    {
        $data = DB::table('contacts')->get();
        $items = DB::table('contents')->get();
        return view('guest.pages.contact', compact('data','items'));
    }
}
