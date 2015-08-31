<?php

namespace App\Http\Controllers;

use View;
use App\author;

class Authors extends Controller
{

	public $restful= true;


	public function index()
	{
		$authors=author::all();
		//$authors=author::where('id','>=','1');

		return View('authors.index',compact('authors'))->with('title','Authors');

		//return View::make('authors.index')->with('title','Authors and Books');
	}

	public function detailview($id)
	{
		return View::make('authors.authordetail')->with('title','Detail')
		->with('author',author::find($id));
	}
}

?>
