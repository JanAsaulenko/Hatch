<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 19.04.2018
 * Time: 23:48
 */

namespace App\Http\Controllers\Moders;


use App\Post;
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
        $complains = Post::paginate(5);

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
    public function store()
    {
        //
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
        return view('moders.complains.show')->with('complain', $complain);
        //return view('moders.complains.show', compact('complain'));
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
    public function update($id)
    {
        //

        $complain = Post::find($id);
        //dd($request);
        $complain->confirmed = 1;

        $complain->save();



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
    }
}