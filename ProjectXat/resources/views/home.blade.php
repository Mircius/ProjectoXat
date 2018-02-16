@extends('layouts.app')

@section('content')
<div class="container">

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
@endsection
