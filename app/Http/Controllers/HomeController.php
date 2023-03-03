<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the application artist showcase.
     *
     * @return \Illuminate\Http\Response
     */
    public function artistShowCase()
    {
        return view('artist-showcase');
    }

    /**
     * Show the application artist showcase profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function artistShowCaseProfile()
    {
        return view('artist-showcase-profile');
    }

    /**
     * Show the application art detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function artDetail()
    {
        return view('art-detail');
    }

    /**
     * Show the application author showcase.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorShowCase()
    {
        return view('author-showcase');
    }

    /**
     * Show the application author showcase profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorShowCaseProfile()
    {
        return view('author-showcase-profile');
    }

    /**
     * Show the application portry detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function poetryDetail()
    {
        return view('poetry-detail');
    }
    public function registerYour()
    {
        return view('register');
    }
    public function loginArtist()
    {
        return view('art-login');
    }

    
    public function registerStore(Request $request)
    {
        $data = $request->except(['_token']);
        if(Register::create($data)){ 
            return redirect()->back();
           }
       else{
           return redirect()->back()->with('error','Something went wrong!');
       }
       
    }
}
