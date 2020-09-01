<?php

namespace App\Http\Controllers;

use App\Models\AdSense;
use App\Models\Books;
use App\Models\Cater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Admin.index');
    }
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'title' => 'required|min:1|unique:caters',
                'title_link' => 'required|min:1|unique:caters',
                'description' => 'required|min:10',
                'iconx' => 'required',
            ]);
                $imagex = $request->file('iconx')->store('/public');
                $nn = Storage::url($imagex);
                $ah =  asset($nn);
                $request['icon'] = $ah;
                $file1 = str_replace(" ", "-", $request['title_link']);
                $new = str_replace("#", "-", $file1);
                $new2 = str_replace("_", "-", $new);
                Storage::disk('local')->makeDirectory('public/'.$new2);
                $request['title_link'] = $new;
                Cater::create($request->all());
                return redirect()->back()->with('Greate','Yes');


        }else{
            return view('Admin.addCategory');
        }

    }

    public function addNewBook(Request $request){
        if($request->isMethod('post')){

            $getCater = Cater::find($request['category']);
            $file1 = str_replace(" ", "-", $request['title_link']);
            $new = str_replace("#", "-", $file1);
            $request['title_link']= $new;

            // fix name
            $original_name = strtolower(trim($request['TheBook']->getClientOriginalName()));
            $pdf1   = str_replace(" ", "-", $original_name);
            $newpdf = str_replace("#", "-", $pdf1);
            //

            // poster
            $imagex = $request->file('PdfPoster')->store('/public/');
            $nn = Storage::url($imagex);
            $ah =  asset($nn);
            $request['poster'] = $ah;

            // Pdf File
            $MyPdf = $request->file('TheBook')->storeAs('/public/Books/'.$getCater->title_link,$newpdf);
            $uu = Storage::url($MyPdf);
            $ha =  asset($uu);
            $request['view_link'] = $ha;
            //

            $request['category'] =$getCater->id;

            $Added = Books::create($request->all());
            if ($Added){
                return redirect()->back()->with('Greate',' ');
            }

        }else{
            $cater = Cater::all();
            return view('Admin.addBook',['cater'=>$cater]);
        }

    }

    public function UpdateBook(){
        $Books = Books::all();
        return view('Admin.SelectBook',['Books'=>$Books]);
    }

    public function UpdateNow(Request $request,$id){
        if($request->isMethod('post')){
            if($request->has('PdfPoster')){
                // New Poster
                $imagex = $request->file('PdfPoster')->store('/public/');
                $nn = Storage::url($imagex);
                $ah =  asset($nn);
                $request['poster'] = $ah;
            }
            if($request->has('TheBook')){
                // New Book
                $getCater = Cater::find($request['category']);

                $original_name = strtolower(trim($request['TheBook']->getClientOriginalName()));
                $pdf1   = str_replace(" ", "-", $original_name);
                $newpdf = str_replace("#", "-", $pdf1);
                $MyPdf = $request->file('TheBook')->storeAs('/public/Books/'.$getCater->title_link,$newpdf);
                $uu = Storage::url($MyPdf);
                $ha =  asset($uu);
                $request['view_link'] = $ha;

            }
            $file1 = str_replace(" ", "-", $request['title_link']);
            $new = str_replace("#", "-", $file1);
            $request['title_link']= $new;

            $getBook = Books::find($id);
            $update = $getBook->update($request->all());

            return redirect()->back()->with('Greate',' ');



        }else{
            $Books = Books::find($id);
            $cater = Cater::all();
            return view('Admin.UpdateBook',['Books'=>$Books,'Cater'=>$cater]);

        }
    }

    public function adSense(Request $request){
        if($request->isMethod('post')){

        }else{
            $GEtCode = AdSense::find(1);
            return view('Admin.adsens',['code'=>$GEtCode]);

        }
    }
}
