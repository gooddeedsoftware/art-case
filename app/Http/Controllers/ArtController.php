<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;

class ArtController extends Controller
{
    public function index(Request $request){
        $data = Art::all();
        return view('administrator.art-detial.index', compact('data'));
    }

    public function create(Request $request){
        return view('administrator.art-detial.artForm');
    }
    public function store(Request $request){
        $input = $request->all();
        
             Art::create($input);
        return redirect()->back();
    }
    public function edit(Request $request){
       dd(123);
        return redirect()->back();
    }
    
}
