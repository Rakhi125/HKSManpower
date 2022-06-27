<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    //

public function product()

{
    //It is for testing purpose which route is in "Bagisto-Real/route"
    //dd("xyz");
    return view('product');

}

public function automotive()

{
    //It is for testing purpose which route is in "Bagisto-Real/route"
    //dd("xyz");
    return view('automotive');

}


}
