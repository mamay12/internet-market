<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function first(){
        $db = DB::select("SELECT * FROM `al_tree`");

        return view('first', ['db' => $db]);
    }

    public function out($id=null){
        return view('test', ['id' => $id]);
    }

    public function category($category){
        return view('category', compact('category'));
    }

    public function about(){
        return view('about');
    }
}
