<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
class BuilderController extends Controller
{

    function AllRows(){
        $result= DB::table('details')->get();
        return  $result;
    }
}
