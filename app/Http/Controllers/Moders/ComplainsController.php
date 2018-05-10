<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 19.04.2018
 * Time: 23:48
 */

namespace App\Http\Controllers\Moders;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ComplainsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $complains = Post::where('confirmed', NULL)
            ->orderBy('created_at', 'desc')
            ->paginate(5);


        return view('moders.complains.index')->with('complains', $complains);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $complain = Post::find($id);
        //dd($request);
        $complain->confirmed = $request->confirmed;

        $complain->save();



        return redirect('moders/complains/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $complain = Post::find($id);

        return view('moders.complains.show', compact('complain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $complain = Post::find($id);

        return View('moders.complains.edit', compact('complain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all());

        $complain = Post::find($id);

        $complain->confirmed = 1;

        $complain->save();

        //\Session::flash('Sucsess','Скарга збережена.');

        return redirect('moders/complains');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        Post::find($id)->delete();
        return redirect('moders/complains')
            ->with('success','Complain deleted successfully');
    }
}