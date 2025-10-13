<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }


    public function create()
    {
        return view('book.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }


   public function destroy($id)
{
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
}
}
