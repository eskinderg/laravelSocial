<?php
namespace Social\Interfaces\Services\Weather;

use Social\Interfaces\Services\Weather\IWeather;
use SoapClient;

class Weather implements IWeather
{



    public function GetCityForecastByZIP($zip)
    {
      $soapClient = new SoapClient("http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL");
      $response = $soapClient->GetCityForecastByZIP(array("ZIP" => $zip));
      //dd($response->GetCityForecastByZIPResult->City);
      return $response->GetCityForecastByZIPResult->City;
    }

}

?>
