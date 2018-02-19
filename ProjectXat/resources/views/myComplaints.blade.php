@extends('layouts.app')

@section('content')
<!-- <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <nav class="breadcrumb">
                <span class="breadcrumb-item active">Home</span>
            </nav>
            <div class="panel panel-default">
                
                <div class="panel-heading">Complaints</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    In progress!
                </div>
            </div>
        </div>
    </div>
</div>
 -->




  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <style>
        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ProjectXat</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Complaints <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">My complaints</a></li>
                  <li><a href="#">New complaints</a></li>                        
                </ul>
              </li>
              <li><a href="#">Xat</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

          <h1 class="my-12">Notices</h1>


         <!-- Notice 1 -->  
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-2" src="http://placehold.it/350x200" alt="">
                </a>
            </div>
            <div class="col-md-8 text-justify">
              <h3>Notice One</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
              <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
         <!-- /.row -->
         <hr>

        <!-- Notice 2 -->  
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-2" src="http://placehold.it/350x200" alt="">
                </a>
            </div>
            <div class="col-md-8 text-justify">
              <h3>Notice Two</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
              <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
         <!-- /.row -->
        <hr>


          <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> -->

        </div>

        </div>

      </div>
      <!-- /.row -->

    
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

@endsection