<?php
/**
 * Created by PhpStorm.
 * User: Ян
 * Date: 10.04.2018
 * Time: 0:39
 */

namespace App\Http\Controllers;


class HomeController
{
    public function show()
    {
        return view('home');
    }

}