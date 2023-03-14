<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poetry;

class PoetryController extends Controller
{
    public function index(Request $request){
        $data = Poetry::all();
        return view('administrator.poetry-detial.index', compact('data'));
    }

    public function create(Request $request){
        return view('administrator.poetry-detial.poetryForm');
    }

    public function store(Request $request){
        $input = $request->all();    
        Poetry::create($input);
        return redirect()->route('poetry.index');
    }
}
