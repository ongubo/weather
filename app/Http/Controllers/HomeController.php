<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function saveWeather()
    {
        $city = 'Nairobi';
        $url  = 'http://api.apixu.com/v1/current.json?key=0e188521173c4222a5c133238161508&q=' . $city;
        $ch   = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_output  = curl_exec($ch);
        $weather_data = json_decode($json_output);
        // echo "Temperature: " . $weather_data->current->temp_c;
        // return view('welcome');
        // return response()->json($weather_data);
        return view('welcome', ['weather_data' => $weather_data]);
    }
}
