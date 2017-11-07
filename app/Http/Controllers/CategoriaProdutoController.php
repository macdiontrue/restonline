<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
{
    public function index(Request $request){

    	$address=$request->address;

		$adressConvert=str_replace(' ','+',$address);

		$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$adressConvert.'&sensor=false');

		$output= json_decode($geocode);

		$lat = $output->results[0]->geometry->location->lat;
		$long = $output->results[0]->geometry->location->lng;


    	return 'Latitude '.$lat.'<br>'.'Longitude '.$long;;
    }
}
