<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Rating;
use App\Models\Like;
use App\Models\Poetry;
use App\Models\Art;
use App\Models\Wishlist;
use Auth;

class ReviewController extends Controller
{
     public function store(Request $request) {
        if($request->review !== null) {
            Review::create([
                'user_id' => Auth::user()->id,
                'type' => $request->type,
                'list_id' => $request->list_id,
                'review' => $request->review
            ]);
        }
         if($request->rating !== 0) {
            $poetry = Art::find($request->list_id);
            if(!$poetry) {
                return redirect()->back()->with('error' ,'Art Not Found.');
            }
            $user_id = Auth::user()->id;
            $user_name = Auth::user()->first_name.' '. Auth::user()->last_name;
            $date = date('Y-m-d h:i:s');
            $checkRating = Rating::where('user_id', $user_id)->where('art_id', $request->list_id)->first();
            if($checkRating) {
                $history = json_decode($checkRating->history);
                array_push($history,"Rated $poetry->title By $user_name ON $date");
                Rating::where('user_id', $user_id)->where('art_id', $request->list_id)->update(
                    [
                        'rating' => $request->rating,
                        'history' => json_encode($history)
                    ]
                );
                return redirect()->back()->with('success', 'Rating Update Successfully.');
            }
            $history = ["Rated $poetry->title By $user_name On $date"];
            Rating::create([
                'user_id' => Auth::user()->id,
                'art_id' => $request->list_id,
                'rating' => $request->rating,
                'history' => json_encode($history)
             ]);
         }
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

    public function wishlist(Request $request)
    {
        return view('wishlist');
    }
     
    public function addToWishlist(Request $request)
    {
        $this->validate($request, array(
            'list_id' =>'required',
            'type' =>'required',
            ));

        $status = Wishlist::where('user_id',Auth::user()->id)
                    ->where('list_id',$request->list_id)
                    ->where('type',$request->type)
                    ->first();

        if(isset($status->user_id) && isset($request->list_id))
        {
            return response()->json(['message' => 'This art is already in your wishlist!']);
        }
        else
        {
            $wishlist = new Wishlist;

            $wishlist->user_id = Auth::user()->id;
            $wishlist->list_id = $request->list_id;
            $wishlist->type = $request->type;
            $wishlist->save();

            return response()->json(['message' => 'Art , '. $wishlist->listing->title.' Added to your wishlist.']);
        }
    }
     
    public function featured(Request $request)
    {
        $this->validate($request, array(
            'id' =>'required',
        ));

        $status = Art::find($request->id);
        if($status->featured)
        {
            $status->featured = '0';
            $status->save();
            return response()->json(['message' => 'Art , '. $status->title.' Removed from featured !']);
        }
        else
        {
            $status->featured = '1';
            $status->save();
            return response()->json(['message' => 'Art , '. $status->title.' Added to Featured list.']);
        }
    }

    public function removeWishlist(Request $request)
    {
      $wishlist = Wishlist::findOrFail($request->id);
      $wishlist->delete();
      return response()->json(['message' => 'Art removed from wishlist.']);
    }
}
