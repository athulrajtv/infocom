<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Addcourse;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddcourseController extends Controller
{
    public function Addcourse(Request $request,$id)
    {
        $data = Addcourse::all();   
        $course = Category::find($id);
        return view('admin.course.addcourse', compact('data','course'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Addcourse::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'name' => $request->name,
        ]);   
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request,$id)
    {
        $data = Addcourse::find($id);
        return view('admin.course.editaddcourse', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Addcourse::find($id);

        // Check if the record exists
        if (!$data) {
            return redirect()->back()->with('error', 'Record not found.');
        }


        $data->Update([
            'name' => $request->name,
        ]);
        return redirect(route('admin.addcourse.course', $data->course_id))->with('success', ' Updated successfully.'); 
    }

    public function Delete(Request $request,$id)
    {
        $data = Addcourse::find($id);

        $data->delete();
        
        return redirect()->back()->with('success', ' Deleted successfully.');
    }

    
}
