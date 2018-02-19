@extends('layouts.app')

@section('content')
<!-- <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="http://localhost:8000/home">Home</a>
                    /
                    <span class="breadcrumb-item active">Chat</span>
                  </nav>
            <div class="panel panel-default">
                
                <div class="panel-heading">Chat</div>

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
</div> -->

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style type="text/css">
    
        .chatperson{
          display: block;
          border-bottom: 1px solid #eee;
          width: 100%;
          display: flex;
          align-items: center;
          white-space: nowrap;
          overflow: hidden;
          margin-bottom: 15px;
          padding: 4px;
        }
        .chatperson:hover{
          text-decoration: none;
          border-bottom: 1px solid orange;
        }
        .namechat {
            display: inline-block;
            vertical-align: middle;
        }
        .chatperson .chatimg img{
          width: 40px;
          height: 40px;
          background-image: url('http://i.imgur.com/JqEuJ6t.png');
        }
        .chatperson .pname{
          font-size: 18px;
          padding-left: 5px;
        }
        .chatperson .lastmsg{
          font-size: 12px;
          padding-left: 5px;
          color: #ccc;
        }
        
    </style>
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

    <!-- XAT -->
    <div class="container">
    <div class="row">
        <div class="card col-sm-4 " style="overflow:scroll;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Name</h5>
                </div>
                <p>Last msg</p>
            </li>
            <li class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Name</h5>
                </div>
                <p>Last msg</p>
            </li>
            <li class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Name</h5>
                </div>
                <p>Last msg</p>
            </li>
            
          </ul>
        </div>

        
        <div class="col-sm-8">
          <div class="chatbody">
    
            <table class="table">
              <tr>
                <td>message</td>
                <td>time</td>
              </tr>
            </table>
    
          </div>

          <div class="row">
            <div class="col-xs-9">
              <input type="text" placeholder="Message..." class="form-control" [(ngModel)]="message" />
            </div>
            <div class="col-xs-3">
              <button class="btn btn-info btn-block" (click)="">Send</button>
            </div>
          </div>

        </div>
    </div>
</div>
</body>


@endsection
