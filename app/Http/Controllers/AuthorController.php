<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($slug)
    {
        // Encuentra el autor por el slug
        $author = Author::where('slug', $slug)->with('books', 'quotes', 'readings')->firstOrFail();

        return view('authors.show', compact('author'));
    }
}
