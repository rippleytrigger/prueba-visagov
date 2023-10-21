<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books as Book;

class LibrosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('libros');
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
          ]);
          Books::create($request->all());
          return redirect()->route('libros.index')
            ->with('success','Post created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        ]);
        $book = Books::find($id);
        $book->update($request->all());
        return redirect()->route('libros.index')
        ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $book = Books::find($id);
        $book->delete();
        return redirect()->route('posts.index')
        ->with('success', 'Post deleted successfully');
    }

}
