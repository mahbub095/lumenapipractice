<?php
namespace App\Http\Controllers;
use App\User;

class MyController extends controller
{


    public function My($name){
        //return "My Name is ".$name;
        return response($name)
            ->header('name',$name)
            ->header('age','26')
            ->header('city','Dhaka')
            ->header('username','Mahbub');
    }

   /* public function My($name){
        return "My Name is ".$name;
    }*/
}
