<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function first(){
        $db = DB::select("SELECT * FROM `migrations`");

        return view('first', ['db' => $db]);
    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function about(){
        return view('about');
    }
}
