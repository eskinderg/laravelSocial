<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use View;
use Auth;

class Home extends Controller
{

//public $restful = true;

  public function index()
  {
    //redirect()->route('authors');

      $currentUser = null;

      if (Auth::check())
        {
            $currentUser = Auth::user();
        }

    return View::make('home.index')->with('currentUser',$currentUser);
    //return View::make('home.index',array('name'=>'Eskinder'))->with('age','29');

  }
}
