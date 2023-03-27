<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Like;
use App\Models\Poetry;
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

     public function like(Request $request) {
        $poetry = Poetry::find($request->id);
        if(!$poetry) {
            return response()->json(['error' => 'Poetry Not Found.']);
        }
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->first_name.' '. Auth::user()->last_name;
        $checkLike = Like::where('user_id', $user_id)->where('poetry_id', $request->id)->first();
        $date = date('Y-m-d h:i:s');
        if($checkLike) {
            $history = json_decode($checkLike->history);
            $types = "Liked";
            if($request->like === '0') {
                $types = "Disliked";
            }
            array_push($history,"$types $poetry->title By $user_name ON $date");
            Like::where('user_id', $user_id)->where('poetry_id', $request->id)->update(
                [
                    'like_count' => $request->like,
                    'history' => json_encode($history)
                ]
            );
            return response()->json(['success' => 'Like Update Successfully.']);
        }
        $history = ["Liked $poetry->title By $user_name On $date"];
        Like::create([
            'user_id' => $user_id,
            'poetry_id' => $request->id,
            'like_count' => $request->like,
            'history' => json_encode($history)
         ]);
         return response()->json(['success'=>'Like Added Successfully.']);
     }
}
