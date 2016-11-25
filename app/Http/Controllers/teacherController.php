<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;


class teacherController extends Controller
{
    public function addLesson(Request $request)
    {
        return view('addLesson')   ;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeLesson(Request $request)
    {
        $item = new item;
        $item->cat_id = 5 ;
        $item->save();

        return back();

    }
    public function showLessons()
    {
        $lessons = DB::table('items')->get();

        return view('ShowLessons' , compact( 'lessons'  ));
    }
    public function makePass()
    {
        return view('makePass');
    }
}
