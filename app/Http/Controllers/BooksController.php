<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Comparator\Book;


class BooksController extends Controller
{

    public function show($id)
    {
        $book = Books::where('title_link',$id)->first();
        if(isset($book)){
            $book->download_count = ($book->download_count) + 1 ;
            $countAre =  $book->update(['download_count'=>$book->download_count]);
            $caterName = Cater::find($book->category);
            $related = Books::where('category',$book->category)->inRandomOrder()->take(4)->get();
            return view('website.book',['book'=>$book,'cater'=>$caterName,'related'=>$related]);

        }else{
            return view('website.Error_page');
        }
    }
    public function read($id)
    {
        $book = Books::where('title_link',$id)->first();
        if(isset($book)){
            $book->download_count = ($book->download_count) + 1 ;
            $countAre =  $book->update(['download_count'=>$book->download_count]);

            return view('website.bookRead',['book'=>$book]);
        }else{
            return view('website.Error_page');
        }
    }




    public function shourtCourse($id){
        $getid = intval($id);
        $getCourse = Books::find($getid);
        if(isset($getCourse) > 0){

            return Redirect::route('ShowBook',[$getCourse->title_link])->with(['book'=>$getCourse]);
        }else{
            return Redirect::to('./');
        }

    }

    public function search(Request $request){
        $title = trim($request->get('query'));
        /* $search = Course::where('title','like','%'.$title.'%')->paginate(1);
         $m = $search->getOptions()['pageName'] = 'Dexter';
         $page = $search->currentPage();
         dd($m,$search->items()[0]->title,$search->url($page));*/
        $search = Books::where('title','like','%'.$title.'%')
            ->orWhere('title_link','like','%'.$title.'%')
            ->orWhere('description','like','%'.$title.'%')
            ->limit(50)
            ->get();
        if(count($search) > 0){
            return view('website.search_index',['search_title'=>$title,'search_data'=>$search,'is_data'=>1]);
        }else{

            return view('website.Error_page');
        }

    }

}
