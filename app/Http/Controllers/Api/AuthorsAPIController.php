<?php

namespace Social\Http\Controllers\Api;

use View;
use Social\Models\Author;

use Illuminate\Http\Request;

use Social\Http\Requests;
use Social\Http\Controllers\Controller;

class AuthorsAPIController extends Controller
{

  public function index()
  {
    $authors= author::all();

		return $authors;

  }

  public function show(Author $author)
  {
    //$author = author::find($id);

    return $author;
  }

  public function store(Request $request)
  {
      $newauthor = new author;
      $newauthor->fill($request->all());
      //$author->name = "NNNNN";
      $newauthor->save();
  }

  public function update(Request $request,Author $author)
  {

    //$author = author::findOrFail($id);
    $author->fill($request->all());

    //$author->fill($request->all());
    $author->save();

  //var_dump ($id);
    //return redirect('/wizard#/Authors');
  }

  public function destroy(Author $author)
  {
    //$author = author::findOrFail($id);
    $author->delete();
  }

}
