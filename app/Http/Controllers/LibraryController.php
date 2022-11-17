<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return view('index', [
                "pagetitle" => "Writers",
                "maintitle" => "Writers in My Library",
                "writers" => Writer::where('name', 'like', '%' . $request->search . '%')->orwhere('contact', 'like', '%' . $request->search . '%')->paginate(),
                "books" => Book::whereRelation('writer', 'name', 'like', '%' . $request->search . '%')->get()
            ]);
        } else {
            return view('index', [
                "pagetitle" => "Writers",
                "maintitle" => "Writers in My Library",
                "writers" => Writer::paginate(10),
                "books" => Book::all()
            ]);
        }
    }

    public function show(Writer $writer)
    {

        //menggunakan route model binding
        $writer->load('books');

        //tanpa route model binding
        // Writer::find(1)->with('books')->get();

        return view('showwriter', [
            "pagetitle" => "Writer Details",
            "maintitle" => "Writer Details",
            "writers" => $writer
        ]);
    }

    public function about()
    {
        return view('about', [
            "pagetitle" => "About",
            "maintitle" => "About page"
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "pagetitle" => "Contact",
            "maintitle" => "Contact page"
        ]);
    }
}
