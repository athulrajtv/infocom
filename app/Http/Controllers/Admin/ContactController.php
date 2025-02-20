<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function Contact()
    {
        $data = Contact::all();
        return view('admin.contact.contactpage', compact('data')); 
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address'=> 'required|string',
            'email'=> 'required|string|max:255',
            'number'=> 'required|string|max:255',
            'link'=> 'required|string',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Contact::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'number' => $request->number,
            'link' => $request->link,
        ]);
        return redirect()->back()->with('success','Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Contact::find($id);
        return view('admin.contact.editcontact', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address'=> 'required|string',
            'email'=> 'required|string|max:255',
            'number'=> 'required|string|max:255',
            'link'=> 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Contact::find($id);

        $data->Update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'number' => $request->number,
            'link' => $request->link,
        ]);
        return redirect(route('admin.Contact'))->with('success', ' Updated successfully.'); 
    }

    public function Delete(Request $request,$id)
    {
        $data = Contact::find($id);

        if(!$data){
            return redirect()->back()->with('error', 'Banner not found');
        }

        $data->delete();
        
        return redirect()->back()->with('success', ' Deleted successfully.');
    }

}
