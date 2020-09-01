<?php

namespace App\Http\Controllers;

use App\Models\Cater;
use Illuminate\Http\Request;

class CaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCater = Cater::with('BooksInCater')->get();
        return view('website.cater.index',['data'=>$getCater]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBooks($id)
    {
        $cater = Cater::where('title_link',$id)->first();
        if(isset($cater) ){
            $books =$cater->BooksInCater;
            return view('website.cater.books',['books'=>$books,'title'=>$cater->title]);

        }else{
            // not found
            dd('not found');
        }

    }


}
