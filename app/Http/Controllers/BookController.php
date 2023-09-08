<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

/**
 * Class BookController
 * @package App\Http\Controllers
 */
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate();

        // $baseUrl = url('/');
        // foreach ($books as $book) {
        //     $book->image_path = str_replace('C:\\xampp\\tmp\\', $baseUrl . '/storage/', $book->image_path);
        // }

        return view('home.index', compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * $books->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();
        $categories = Category::all();

        return view('book.create', compact('book', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Book::$rules);

        if ($validator->fails()) {
            return redirect()->route('books.create')
                ->withErrors($validator)
                ->withInput();
        }

        $book = new Book();

        $book->title = $request->title;
        $book->status = 1;
        $user = auth()->user();
        $book->owner_id = $user->id;

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path');
            $imageName = Str::slug($request->title) . "." . $imagePath->getClientOriginalExtension();
            $imagePath->storeAs('public/uploads', $imageName);
            $book->fill($request->all());
            $book->image_path = $imageName;
        }



        $book->save();

        return redirect()->route('books.create')
            ->with('success', 'Libro publicado correctamente.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        request()->validate(Book::$rules);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Libro editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $book = Book::find($id)->delete();

        return redirect()->route('books.index')
            ->with('success', 'Libro eliminado correctamente');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords($value);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = ucwords($value);
    }
}
