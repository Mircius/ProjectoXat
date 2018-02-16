<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Chat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        @extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="http://localhost:8000/home">Home</a>
                    /
                    <span class="breadcrumb-item active">Complaints</span>
                  </nav>
                    <div class="panel panel-default">
                      <div class="panel-heading">Complaints</div>
                      <div class="panel-body">
                      <form method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="title">Title:</label>
                          <input type="text" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                          <label for="street">Street:</label>
                          <input type="text" class="form-control" id="street">
                        </div>
                        <div class="form-group">
                          <label for="city">City:</label>
                          <input type="text" class="form-control" id="city">
                        </div>
                        <div class="form-group">
                          <label for="cp">Postal Code:</label>
                          <input type="text" class="form-control" id="cp">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" id="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>

                      </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection