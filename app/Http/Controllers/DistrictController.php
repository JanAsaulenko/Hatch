<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\District;

class DistrictController extends Controller
{
    public function checkDistrict($title) {
        $t = District::all()->where('title',$title)->first();
        if($t){
            return District::find($t->id);
        }
        return District::findOrFail( 0 );
    }

    public function distrisctToJson( $id ) {
        $currentDistrict  = District:: findOrFail( $id );

        return json_encode($currentDistrict);
    }


    public function PostsToJson($post){
        return json_encode($post) ;
    }



    public function index($title){
        $currentDistrict = $this->checkDistrict($title);
        $postsJson = $this->PostsToJson($currentDistrict->posts);
        $currentDistrictJson = $this->distrisctToJson($currentDistrict);
        dd($currentDistrictJson);
        return view('home',['district'=>$currentDistrictJson , 'posts'=>$postsJson]);
    }
}
