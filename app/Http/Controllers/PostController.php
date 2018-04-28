<?php
/**
 * Created by PhpStorm.
 * User: Ян
 * Date: 10.04.2018
 * Time: 0:39
 */

namespace App\Http\Controllers;


 use App\Post;
 use Illuminate\Http\Request;

 class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        return view('post.index')->with('posts', $posts);
    }

    function create (){
        return view('post.create');
    }

     /**
      * @param Request $req
      * @param Post $post
      * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
      */
    function store(Request $req, Post $post)
    {
        $post->create($req->all());
        return  redirect('/posts/create');
    }
}
