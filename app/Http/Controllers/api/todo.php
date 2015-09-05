<?php

namespace App\Http\Controllers\api;

use View;
use App\author;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class todo extends Controller
{

  public function index()
  {
    $authors= author::all();

		return $authors;

  }

  public function show($id)
  {
    $author = author::find($id);

    return $author;
  }

  public function store(Request $request)
  {
      $author = new author;
      $author->fill($request->all());
      //$author->name = "NNNNN";
      $author->save();
  }

  public function update(Request $request,$id)
  {

    $author = author::findOrFail($id);
    $author->fill($request->all());
    //$author->fill($request->all());
    $author->save();

  //var_dump ($id);
    //return redirect('/wizard#/Authors');
  }

  public function destroy($id)
  {
    $author = author::findOrFail($id);
    $author->delete();
  }

}
