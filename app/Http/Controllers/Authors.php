<?php

namespace Social\Http\Controllers;

use View;
use Social\Models\Author;

class Authors extends Controller
{

	public $restful= true;


	public function index()
	{
		$authors=Author::all();
		//$authors=author::where('id','>=','1');

		$paginatedAuthors = Author::paginate(5);
		//dd($paginatedAuthors);
		return View('authors.index',compact('authors'))
									->with('paginatedAuthors',$paginatedAuthors);

		//return View::make('authors.index')->with('title','Authors and Books');
	}

	public function detailview(Author $author)
	{
		dd($author->name);
		return View::make('authors.authordetail')->with('title','Detail')
		->with('author',$author);
	}
}

?>
