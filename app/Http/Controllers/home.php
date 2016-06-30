<?php
namespace Social\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use View;
use Auth;
use \Social\Interfaces\IDocument;
use \Social\Interfaces\Services\Weather\IWeather;

class Home extends Controller
{

 protected $idocument = null;
 protected $IWeather = null;

  function __construct(IDocument $doc, IWeather $weather)
  {
  	$this->idocument = $doc;
    $this->IWeather = $weather;
  }

//public $restful = true;

  public function index()
  {
    //redirect()->route('authors');

      $City = $this->IWeather->GetCityForecastByZIP(22151);

      $currentUser = null;

      if (Auth::check())
        {
            $currentUser = Auth::user();
        }

      //$messages = \Social\User::find($currentUser->id)->messages;


    return View::make('home.index')
    	->with('currentUser',$currentUser)
    	->with('injected',$this->idocument->Title())
    	->with('CurrentDate',$this->idocument->CurrentTime())
      ->with('City',$City);
    //return View::make('home.index',array('name'=>'Eskinder'))->with('age','29');

  }
}
