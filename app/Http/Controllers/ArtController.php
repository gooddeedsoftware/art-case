<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\User;

class ArtController extends Controller
{
    public function index(Request $request){
        $data = Art::with('artist')->get();
        return view('administrator.art.index', compact('data'));
    }

    public function create(Request $request){
        $edit = false;
        $artist = User::where('type','artist')->get();
        return view('administrator.art.create', compact('artist', 'edit'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/art/'), $imageName);

        $input['image'] = $imageName;
        Art::create($input);
        return redirect(route('art.index'))->with('success', 'Art Added Successfully.');
    }

    public function edit($id){
       $edit = true;
       $artist = User::where('type','artist')->get();
       $art = Art::find($id);
       if(!$art) {
           return redirect()->back()->with('error', 'Art Not Found !');
        }
        return view('administrator.art.create', compact('artist', 'edit', 'art'));
    }

    
    public function update(Request $request, $id){
        $input = $request->all();
        $art = Art::find($id);
        if(!$art) {
            return redirect()->back()->with('error', 'Art Not Found !');
         }
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/art/'), $imageName);
            $input['image'] = $imageName;
        }
        unset($input['_token']);
        $data = Art::where('id', $id)->update($input);
        return redirect(route('art.index'))->with('success', 'Art Updated Successfully.');
    }

    
    public function delete(Request $request, $id){
        try {
            $data = Art::find($id);
            $data->delete();
            return redirect(route('art.index'))->with('Success', 'Art Deleted Successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e);
        }
    }
    
}
