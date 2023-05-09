<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Classe;

class LibraryController extends Controller
{
    // BOOKS

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return json_decode($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }

    public function loan($id)
    {
        $book = Book::find($id);
        if ($book->available == true) {
            return "indisponivel";
        } else {
            $book->update([
                'available' => true,
            ]);
        }
    }

    public function refund($id)
    {
        $book = Book::find($id);
        if ($book->available == false) {
            return "indisponivel";
        } else {
            $book->update([
                'available' => false,
            ]);
        }
    }

    // END BOOKS

}
