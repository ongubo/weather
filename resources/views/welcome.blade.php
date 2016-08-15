<!DOCTYPE html>
<html>
    <head>
        <title>Weather</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href="{{ URL::asset('assets/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <div class="container">
            <form class="form-horizontal" method="post" action="weather">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <legend>Enter Location</legend>
                    <div class="form-group">
                        <label for="city" class="col-lg-2 control-label">Location</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="city" required id="city" placeholder="e.g. Nairobi">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Get Weather info</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>