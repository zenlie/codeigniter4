<?php

namespace App\Controllers;

use App\Models\BookModel;

define('_TITLE','Buku');

class Book extends BaseController
{
    public function index()
    {
        $book_model = new BookModel();
        $data_book = $book_model->findAll();
        $data = [
            'title' => _TITLE,
            'data_book' => $data_book,
        ];
        return view('book/index', $data);
    }
}