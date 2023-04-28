<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookResource::collection(Book::paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
         ]);

        if (!is_numeric($request->isbn) && $request->has('value')) {
            return response()->json(['error' => 'You can creat your books, value erro.'], 403);
        }else if(!is_numeric($request->isbn) && $request->has('isbn')) {
            return response()->json(['error' => 'You can creat your books, isbn erro.'], 403);
        }


        $book = Book::create([
            'name' => $request->name,
            'isbn' => $request->isbn,
            'value' => $request->value,
          ]);

          return new BookResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

      $book->update($request->only(['name', 'isbn','value']));

      return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
      $book->delete();

      return response()->json(null, 204);
    }
}
