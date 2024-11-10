<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    //

    public function show(){
        $books = DB::table('books')->get();
        return view('book.index', compact('books'));
    }
}
