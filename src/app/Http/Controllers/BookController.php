<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $items = Book::with('author')->get();
        return view('book.index', ['items'=>$items]);
    }

    public function add()
    {
        return view('book.add');
    }
    
    // 送信された値をbooksテーブルに追加
    public function create(Request $request)
    {
        //book.phpで設定したバリデーションのルールを使用するよの意味
        $this->validate($request, Book::$rules);
        $form = $request->all();
        Book::create($form);
        return redirect('/book');
    }
}
