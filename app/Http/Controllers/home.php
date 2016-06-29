<?php
namespace Social\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use View;
use Auth;
use \Social\Interfaces\IDocument;

class Home extends Controller
{

 protected $idocument = null;

  function __construct(IDocument $doc)
  {
	$this->idocument = $doc;
  }

//public $restful = true;

  public function index()
  {
    //redirect()->route('authors');

      $currentUser = null;

      if (Auth::check())
        {
            $currentUser = Auth::user();
        }

      //$messages = \Social\User::find($currentUser->id)->messages;


    return View::make('home.index')->with('currentUser',$currentUser)->with('injected',$this->idocument->Title());
    //return View::make('home.index',array('name'=>'Eskinder'))->with('age','29');

  }
}
