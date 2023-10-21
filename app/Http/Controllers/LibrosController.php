<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

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
        $books = Book::all();
        return view('libros', compact('books'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('libros.edit', compact('book'));
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
          ]);
          Book::create($request->all());
          return redirect()->route('libros')
            ->with('success','Libro Creado Exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        ]);
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('libros')
        ->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('libros')
        ->with('success', 'Libro eliminado exitosamente');
    }

}
