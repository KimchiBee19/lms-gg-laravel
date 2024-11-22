<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    //
    public function list()
    {
        $books = DB::table('books');
        
        $books = $books->get();
        
        return view('book.list', compact('books'));
    }

    public function show(){
        $books = DB::table('books');
        if(request('search')) {
            $books->where('title','like','%' . request('search') . '%')
            ->orWhere('author','like','%' . request('search') . '%');
        }

        $books = $books->get();
        
        return view('book.index', compact('books'));
    }

    public function detail($id, Book $books){
        $book = $books->where('id', decrypt($id))->firstOrFail();

        return view('book.detail', compact('book'));
    }

    public function destroy($id)
    {
        $book = Book::findOrFail(decrypt($id));
        $book->delete();
        Session::flash('title', 'Hapus Buku Berhasil!');
        Session::flash('message', '');
        Session::flash('icon', 'success');
        return redirect()->route('book.show');
    }

    public function edit(){
        return view('book.form');
    }

    public function update(){
        return view('book.form');
    }
}
