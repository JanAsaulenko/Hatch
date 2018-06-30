<?php

namespace App\Http\Controllers;

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
        $district = [
            'id'=> $currentDistrict->id,
            'name'=> $currentDistrict->name,
            'title'=> $currentDistrict->title,
            'image'=> $currentDistrict->image,
        ];
        return json_encode($district);
    }



    public function index($title){
        $currentDistrict = $this->checkDistrict($title);

        //dd( $this->distrisctToJson( $currentDistrict->id ));
        $all_districts = District::all();


        return view('home',['districts'=>$all_districts ]);
    }
}
