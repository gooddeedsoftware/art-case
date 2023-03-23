<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Art;
use App\Models\Poetry;
use App\Models\Review;

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
        return view('artist-showcase-profile', compact('artist', 'arts'));
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
        return view('art-detail', compact('art', 'reviews'));
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
        return view('author-showcase-profile', compact('author', 'poetry'));
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
        return view('poetry-detail', compact('poetry', 'reviews'));
    }
}
