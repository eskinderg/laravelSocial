<?php

namespace App\Http\Controllers\api;

use View;
use App\author;

use App\Http\Controllers\Controller;

class todo extends Controller
{

  public function index()
  {
    $authors= author::all();

		return $authors;

  }

}
