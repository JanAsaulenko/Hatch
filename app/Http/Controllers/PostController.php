<?php
/**
 * Created by PhpStorm.
 * User: Ян
 * Date: 10.04.2018
 * Time: 0:39
 */

namespace App\Http\Controllers;


 use App\Http\Requests\PostRequest;
 use App\Post;
 use Illuminate\Http\Request;

 class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        return view('post.index')->with('posts', $posts);
    }

    function create (Post $post){
        return view('post.create')->with('post', $post);
    }

     /**
      * @param PostRequest $req
      * @param Post $post
      * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
      */
    function store(PostRequest $req, Post $post)
    {
        $validated = $req->validated();
        $post->create($req->all());
        return  redirect('/posts/create');
    }
}
