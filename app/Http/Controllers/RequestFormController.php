<?php
/**
 * Created by PhpStorm.
 * User: Ян
 * Date: 10.04.2018
 * Time: 0:39
 */

namespace App\Http\Controllers;


 use Illuminate\Http\Request;

class RequestFormController
{
    public function index ()
    {
        return view('request-form');
    }

    /**
     * @param Request $req
     */
    function insert(Request $req)
    {
        $userName = $req->input('username');
        $lat = $req->input('lat');
        $lng = $req->input('lng');
        $textarea = $req->input('comments');

        $data = array('username'=>$userName,'lat'=>$lat,'lng'=>$lng,'comments'=>$textarea);
        DB::table('posts')->insert($data);
     echo 'sucsessfull';
    }
}
