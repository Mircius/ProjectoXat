@extends('layouts.app')

@section('content')
<div class="container">

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
</div>
@endsection
