<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\District;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $all_districts = District::all();

        $posts = Post::all();
//            ->reverse()
//            ->take(6);

        return view('home',['districts'=>$all_districts, 'posts'=>$posts]);

    }

    public function show()
    {
        $posts = Post::all()
            ->reverse()
            ->take(6);

        return view('home')->with('posts',$posts);
    }
}