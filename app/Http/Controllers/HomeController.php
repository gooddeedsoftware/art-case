<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Art;
use App\Models\Poetry;
use App\Models\Review;
use App\Models\Rating;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'artDetail',
                'poetryDetail'
            ]
        ]);
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = User::where('type', 'artist')->get();
        $authors = User::where('type','author')->get();
        return view('index', compact('artists', 'authors'));
    }

    /**
     * Show the application artist showcase.
     *
     * @return \Illuminate\Http\Response
     */
    public function artistShowCase()
    {
        $artists = User::where('type', 'artist')->paginate(10);
        return view('artist-showcase', compact('artists'));
    }

    /**
     * Show the application artist showcase profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function artistShowCaseProfile($id)
    {
        $artist = User::find($id);
        $arts = Art::where('user_id', $id)->get();
        $viewSum = Art::where('user_id',$id)->pluck('views')->sum();
        return view('artist-showcase-profile', compact('artist', 'arts', 'viewSum'));
    }

    /**
     * Show the application art detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function artDetail($id)
    {
        $art = Art::with('artist')->find($id);
        $reviews = Review::with('user')->where('type', 'art')->where('list_id', $id)->get();
        $rating = Rating::where('art_id', $id)->latest()->first();
        $this->updateViews($art);
        $viewSum = Art::where('user_id', $art->user_id)->pluck('views')->sum();
        return view('art-detail', compact('art', 'reviews', 'rating', 'viewSum'));
    }

    /**
     * Show the application author showcase.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorShowCase()
    {
        $authors = User::where('type', 'author')->paginate(10);
        return view('author-showcase', compact('authors'));
    }

    /**
     * Show the application author showcase profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorShowCaseProfile($id)
    {
        $author = User::find($id);
        $poetry = Poetry::where('user_id', $id)->get();
        $viewSum = Poetry::where('user_id',$id)->pluck('views')->sum();
        return view('author-showcase-profile', compact('author', 'poetry', 'viewSum'));
    }

    /**
     * Show the application portry detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function poetryDetail($id)
    {
        $poetry = Poetry::find($id);
        $reviews = Review::with('user')->where('type', 'poetry')->where('list_id', $id)->get();
        $this->updateViews($poetry);
        return view('poetry-detail', compact('poetry', 'reviews'));
    }

    /**
     * Count the views of portry and art.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateViews($model)
    {
        $view = $model->views;
        $model->views = $view + 1;
        $model->save();
    }
}
