<?php

namespace App\Http\Controllers;

use App\Models\Cater;
use Illuminate\Http\Request;
use App\Models\Books;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cater = Cater::inRandomOrder()->get();
        $book = Books::all()->count('download_count');
        $count = intval($book) + 461447; 
        //
        $price = $count;

        $price_text = (string)$price; // convert into a string
        $arr = str_split($price_text, "3"); // break string in 3 character sets
        
        $price_new_text = implode(",", $arr);  // implode array with comma
        
       $price_new_text; // will output 987,536,453
        //
       
        return view('website.index',['data'=>$cater,'count'=>$price_new_text]);
    }
}
