<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
     public function store(Request $request) {
         Review::create([
            'user_id' => Auth::user()->id,
            'type' => $request->type,
            'list_id' => $request->list_id,
            'review' => $request->review
         ]);
         return redirect()->back()->with('success', 'Review Added Successfully.');
     }
}
