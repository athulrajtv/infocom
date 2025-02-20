<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function Featurecourse()
    {
        
        $data = Course::orderBy('number', 'asc')->get();
        return view('admin.coursepage.course', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|string|max:255|unique:courses,number',
            'title' => 'required|string|max:255',
            'description'=> 'required|string',
            'rate'=> 'required|string|max:255',
            'discount'=> 'required|string|max:255',
            'duration'=> 'required|string|max:255',
            'eligibility'=> 'required|string|max:255',
            'career'=> 'required|string',
            'status'=> 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('course', $file):null;

        Course::create([
            'number' => $request->number,
            'title' => $request->title,
            'description' => $request->description,
            'rate' => $request->rate,
            'discount' => $request->discount,
            'duration' => $request->duration,
            'eligibility' => $request->eligibility,
            'career' => $request->career,
            'status' => $request->status,
            'image' => $path,
        ]);
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Course::find($id);
        return view('admin.coursepage.editcourse', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description'=> 'required|string',
            'rate'=> 'required|string|max:255',
            'discount'=> 'required|string|max:255',
            'duration'=> 'required|string|max:255',
            'eligibility'=> 'required|string|max:255',
            'career'=> 'required|string',
            'status'=> 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Course::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('course',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'number' => $request->number,
            'title' => $request->title,
            'description' => $request->description,
            'rate' => $request->rate,
            'discount' => $request->discount,
            'duration' => $request->duration,
            'eligibility' => $request->eligibility,
            'career' => $request->career,
            'status' => $request->status,
            'image' => $path,
        ]);
        return redirect(route('admin.course'))->with('success', ' Updated successfully.'); 
    }

    public function Delete(Request $request,$id)
    {
        $data = Course::find($id);

        if(!$data){
            return redirect()->back()->with('error', 'Banner not found');
        }

        if($data->image)
        {
            Storage::disk('uploads')->delete($data->image);
        }

        $data->delete();
        
        return redirect()->back()->with('success', ' Deleted successfully.');
    }


}
