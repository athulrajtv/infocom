<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    public function Certification()
    {
        $data = Certification::all();
        return view('admin.certification.certificationpage', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('certification', $file):null;

        Certification::create([
            'image' => $path,
        ]);
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Certification::find($id);
        return view('admin.certification.editcertification', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Certification::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('certification',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'image' => $path,
        ]);
        return redirect(route('admin.Certification'))->with('success', ' Updated successfully.'); 
    }
    
    public function Delete(Request $request,$id)
    {
        $data = Certification::find($id);

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
