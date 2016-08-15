<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\Driver\Manager;

class Weather extends Eloquent
{
    protected $guarded      = array();
    protected $collection = 'weather_data';
    protected $connection   = 'mongodb';
    
}
