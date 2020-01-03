<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function My($name){
        return "My Name is ".$name;
        return response($name)
            ->header('name',$name)
            ->header('age','28')
            ->header('city','Rajshahi')
            ->header('username','Rupom');
    }
    //
}
