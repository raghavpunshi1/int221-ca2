<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    function getData(Request $req)
    {
        $num1 =  $req->input()["num1"];
        $num2 =  $req->input()["num2"];
        $total = $num1 + $num2;
        return "Sum of $num1 and $num2 = $total";
    }
}
