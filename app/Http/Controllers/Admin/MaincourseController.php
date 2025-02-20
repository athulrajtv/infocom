<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaincourseController extends Controller
{
    public function Courses()
    {
        $data = Category::orderBy('number', 'asc')->get();
        return view('admin.course.coursepage', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|string|max:255|unique:categories,number',
            'title' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Category::create([
            'number' => $request->number,
            'title' => $request->title,
        ]);
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Category::find($id);
        return view('admin.course.editcourse', compact('data'));
    }


    

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Category::find($id);

        $data->Update([
            'number' => $request->number,
            'title' => $request->title,
        ]);
        return redirect(route('admin.course.coursepage'))->with('success', ' Updated successfully.'); 
    }




    public function Delete(Request $request,$id)
    {
        $data = Category::find($id);

        $data->delete();
        
        return redirect()->back()->with('success', ' Deleted successfully.');
    }

}
