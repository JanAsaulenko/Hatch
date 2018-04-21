<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 19.04.2018
 * Time: 23:48
 */

namespace App\Http\Controllers;


class ModeratorFormController
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('show');
    }
    public function edit()
    {
        return view('edit');
    }
}