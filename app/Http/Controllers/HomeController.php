<?php
namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;
use Manager;

class HomeController extends Controller
{
    public function saveWeather(Request $request)
    {
        $city = $request->city;
        $url  = 'http://api.apixu.com/v1/current.json?key=0e188521173c4222a5c133238161508&q=' . $city;
        $ch   = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_output            = curl_exec($ch);
        $weather_data           = json_decode($json_output);
        if (is_null($weather_data)) {
        	return view('responce', [
	            'error_message'	=> 'Unknown error occured',
	            'error'	=> true,
	            'city'	=> $city,
	        ]);
        }
        if (array_key_exists('error', $weather_data)) {
        	return view('responce', [
	            'error_message'	=> $weather_data->error->message,
	            'error'	=> true,
	            'city'	=> $city,
	        ]);
        }
        else{
        	Weather::create([
	            'city'         => $weather_data->location->name,
	            'country'      => $weather_data->location->country,
	            'temp_celcius' => $weather_data->current->temp_c,
	            'temp_far'     => $weather_data->current->temp_f,
	            'condition'     => $weather_data->current->condition->text,
	        ]);
	        return view('responce', [
	            'weather_data' => $weather_data,
	            'error'         => false,
	            'city'         => $city,
	        ]);
        }
        
    }
    public function home()
    {
        return view('welcome');
    }
}
