<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    public function Announcement()
    {
        $data = Content::all();
        return view('admin.announcement.announcementpage', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required|string|max:1000',
            'news' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Content::create([
            'link' => $request->link,
            'news' => $request->news,
        ]);
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Content::find($id);
        return view('admin.announcement.editannouncement', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required|string|max:1000',
            'news' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Content::find($id);
       
        $data->Update([
            'link' => $request->link,
            'news' => $request->news,
        ]);
        return redirect(route('admin.Announcement'))->with('success', ' Updated successfully.'); 
    }

    public function Delete(Request $request,$id)
    {
        $data = Content::find($id);
        $data->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }

}
