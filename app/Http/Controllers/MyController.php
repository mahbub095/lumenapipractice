<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class MyController extends controller
{


    // function My()
    //{
        //   return "My Name is ".$name;
       /* $name = array("Volvo", "BMW", "Toyota");

        return response()
            ->json($name);*/

        /* return response($name)

            ->header('name',$name)
            ->header('age','26')
            ->header('city','Dhaka')
            ->header('username','Mahbub');
    }*/

        /* public function My($name){
             return "My Name is ".$name;
         }*/

    /*    public function First()
    {
        return redirect('/Second');
    }

    public function Second(){
        return "I am Second";
    }

    public function Download(){
        $path='demo.txt';
        return response()->download($path);
    }*/

    function Catch(Request $request){
        return $request;

    }

}
