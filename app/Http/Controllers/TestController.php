<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
      // $posts = Test::all();
      // $posts = DB::table('tests')-> orderBY ("name", "desc")->get();
      // dd($posts);
      $posts = Test::get();
      // return view('pages.home', ["arrs"=>$arrs, "games"=>$arrGames]);
      //2émé methode//
      // return view('pages.home',compact("posts"));
      // [
      //   "arrs"=>$arrs,
      //   "arrGames"=>$arrGames
      // ]
    }
    public function about()
    {
      return view('pages.about');

    }
}
