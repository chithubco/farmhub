@extends('layouts.register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <img src="{{ URL::to('app/img/fmdb_logo.png') }}">

                    <div class="panel-heading"><h1 class="page-header text-overflow">REGISTRATION COMPLETE</h1></div>
                    <div class="panel-body">
                        <h1>THANK FOR YOUR REGISTRATION</h1>
                        <h4>The data would be used to make the industry better and provide support for you</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
