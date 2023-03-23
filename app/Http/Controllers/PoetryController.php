<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poetry;
use App\Models\User;
use Auth;

class PoetryController extends Controller
{
    public function index(Request $request){
        $data = Poetry::with('author')->where('user_id', Auth::user()->id)->get();
        if(Auth::user()->type === 'admin') {
            $data = Poetry::all();
        }
        return view('administrator.poetry.index', compact('data'));
    }

    public function create(Request $request){
        $edit = false;
        $author = User::where('type','author')->get();
        return view('administrator.poetry.create', compact('author', 'edit'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/author/'), $imageName);

        $input['image'] = $imageName;
        Poetry::create($input);
        return redirect(route('poetry.index'))->with('success', 'Poetry Added Successfully.');
    }

    public function edit($id){
       $edit = true;
       $author = User::where('type','author')->get();
       $poetry = Poetry::find($id);
       if(!$poetry) {
           return redirect()->back()->with('error', 'Poetry Not Found !');
        }
        return view('administrator.poetry.create', compact('author', 'edit', 'poetry'));
    }

    
    public function update(Request $request, $id){
        $input = $request->all();
        $poetry = Poetry::find($id);
        if(!$poetry) {
            return redirect()->back()->with('error', 'Poetry Not Found !');
         }
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/author/'), $imageName);
            $input['image'] = $imageName;
        }
        unset($input['_token']);
        $data = Poetry::where('id', $id)->update($input);
        return redirect(route('poetry.index'))->with('success', 'Poetry Updated Successfully.');
    }

    
    public function delete(Request $request, $id){
        try {
            $data = Poetry::find($id);
            $data->delete();
            return redirect(route('poetry.index'))->with('Success', 'Poetry Deleted Successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e);
        }
    }
}
