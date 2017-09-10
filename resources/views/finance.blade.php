@extends('layouts.register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <img src="{{ URL::to('app/img/fmdb_logo.png') }}">

                    <div class="panel-heading"><h1 class="page-header text-overflow">Farmers Registeration Form</h1></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/capital') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Mobile Phone</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ session('phone_number') }}">

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    @if($message)
                                        <div>
                                            <h4 class="alert alert-danger">{{$message}}</h4>
                                        </div>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Verify
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="media pad-top bord-top">
                                    <a href="{{url('/')}}">Register</a>
                                    <div class="pull-right">
                                        <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                                        <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                                        <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
