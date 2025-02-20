<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function Gallery()
    {
        $data = Gallery::all();
        return view('admin.gallery.gallerypage', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Gallery::create([
            'title' => $request->title,
        ]);   
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request,$id)
    {
        $data = Gallery::find($id);
        return view('admin.gallery.editgallery', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Gallery::find($id);

        // Check if the record exists
        if (!$data) {
            return redirect()->back()->with('error', 'Record not found.');
        }


        $data->Update([
            'title' => $request->title,
        ]);
        return redirect(route('admin.Gallery'))->with('success', ' Updated successfully.'); 
    }

    
}
