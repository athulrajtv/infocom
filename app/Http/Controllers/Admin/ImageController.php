<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function Image($id)
    {
        $data = Image::all();
        $item = Gallery::find($id);
        return view('admin.gallery.addimage', compact('data','item'));
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
        $path = $file ? Storage::disk('uploads')->put('gallery', $file):null;

        Image::create([
            'gallery_id' => $request->gallery_id,
            'title' => $request->title,
            'image' => $path,
        ]);
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Delete(Request $request,$id)
    {
        $data = Image::find($id);

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
