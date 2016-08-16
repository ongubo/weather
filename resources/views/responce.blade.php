<!DOCTYPE html>
<html>
    <head>
        <title>Weather</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href="{{ URL::asset('assets/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <div class="container row  centered">
            @if ($error)
            <div class="col-md-6 col-md-offset-3">
                <h3 style="text-transform: capitalize;">Error! for location {{$city}}</h3>
                <hr>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error! </strong> {{$error_message}}
                </div>
            </div>
            @else
            <div class="col-md-6 col-md-offset-3">
                <h3 style="text-transform: capitalize;">Weather for {{$city}}</h3>
                <hr>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Data succesfully saved in the database
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-bordered table-striped table-hover table-responsive">
                    <tbody>
                        <tr>
                            <th>
                                Country
                            </th>
                            <td>
                                {{$weather_data->location->country}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                City
                            </th>
                            <td>
                                {{$weather_data->location->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Temp in Celcius
                            </th>
                            <td>
                                {{$weather_data->current->temp_c}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Temp In Farhenheight
                            </th>
                            <td>
                                {{$weather_data->current->temp_f}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Weather Condition
                            </th>
                            <td>
                                {{$weather_data->current->condition->text}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endif
            <div class="col-md-6 col-md-offset-3">
                <a href="/" class="btn btn-primary">Another location</a>
            </div>
        </div>
    </body>
</html>