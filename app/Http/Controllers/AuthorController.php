<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAllAuthors()
    {
        $authors = Author::with('articles')->get();
        return view('main.writer', ['authors' => $authors]);
    }

    public function getAuthorById($id)
    {
        $author = Author::with('articles')->find($id);
        return view('main.writerdetail', ['author' => $author]);
    }
}

