@extends('layouts.register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <img src="{{ URL::to('app/img/fmdb_logo.png') }}">

                    <div class="panel-heading"><h1 class="page-header text-overflow">Capital Need Questionnaire</h1></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Mobile Phone</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" placeholder="{{ $user->phone_number }}" name="phone_number" readonly value="{{ session('phone_number') }}">

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
                                <label for="business_name" class="col-md-4 control-label">Business Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" readonly placeholder="{{ $user->business_name }}" name="business_name" value="{{ old('business_name') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" placeholder="{{ $user->first_name }}" readonly name="first_name" value="{{ old('first_name') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Middle Name</label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text" class="form-control" readonly placeholder="{{ $user->middle_name }}" name="middle_name" value="{{ old('middle_name') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" readonly placeholder="{{ $user->last_name }}" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                </div>
                            </div>
                            <div class="media pad-top bord-top">

                            </div>

                            <div class="form-group{{ $errors->has('yoe') ? ' has-error' : '' }}">
                                <label for="yoe" class="col-md-4 control-label">How old is your business (Yrs)</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="yoe" maxlength="10" placeholder="10">
                                    <small class="text-muted">How long have you being in business for</small>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('business_value') ? ' has-error' : '' }}">
                                <label for="segment" class="col-md-4 control-label">Business Value</label>

                                <div class="col-md-6">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="business_value">
                                        <option value="1">Less than 1 Million</option>
                                        <option value="2">1 Million - 5 Million/option>
                                        <option value="3">5 Million - 10 Million</option>
                                        <option value="3">10 Million - 20 Million</option>
                                        <option value="4">10 Million - 50 Million</option>
                                        <option value="5">50 Million - 100 Million</option>
                                        <option value="6">100 Million - 200 Million</option>
                                        <option value="7">200 Million - 500 Million</option>
                                        <option value="8">500 Million - 1 Billion</option>
                                        <option value="9">1 Billion - 5 Billion</option>
                                        <option value="10">5 Billion - 10 Billion</option>
                                        <option value="11">Greate than 10 Billion</option>
                                    </select>
                                    <small class="text-muted">How much is the total worth of your business right now</small>
                                    @if ($errors->has('business_value'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('business_value') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('capital_need') ? ' has-error' : '' }}">
                                <label for="yoe" class="col-md-4 control-label">Capital Need (NGN)</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="capital_need" maxlength="16" placeholder="10000000">
                                    <small class="text-muted">How much are you looking for in investment</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('segment') ? ' has-error' : '' }}">
                                <label for="segment" class="col-md-4 control-label">Capital Type</label>

                                <div class="col-md-6">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="segment">
                                        <option value="Debt">Loan</option>
                                        <option value="Equity">Partnership</option>
                                        <option value="Combination">Both Loan & Partnership</option>
                                    </select>
                                    <small class="text-muted">Are you looking for a loan or partnership</small>
                                    @if ($errors->has('segment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('segment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('segment') ? ' has-error' : '' }}">
                                <label for="segment" class="col-md-4 control-label">Business Structure</label>

                                <div class="col-md-6">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="segment">
                                        <option value="SP">Sole Proprietorship</option>
                                        <option value="PRT">Partnership</option>
                                        <option value="LTD">Limited Liability (LTD)</option>
                                        <option value="COOP">Cooperative Society</option>
                                    </select>
                                    <small class="text-muted">Are you looking for a loan or partnership</small>
                                    @if ($errors->has('segment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('segment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="media pad-top bord-top">

                            </div>
                            <div class="form-group{{ $errors->has('focus') ? ' has-error' : '' }}">
                                <label for="focus" class="col-md-4 control-label">Use of Funds</label>

                                <div class="col-md-6">
                                    <textarea id="demo-textarea-input" rows="5" class="form-control" placeholder="What do you need the money for" name="focus"></textarea>
                                    @if ($errors->has('focus'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('focus') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Business Plan</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <!-- Inline radio buttons -->
                                        <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="sex" value="Male" checked>
                                        <label for="demo-inline-form-radio">Yes</label>

                                        <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="sex" value="Female">
                                        <label for="demo-inline-form-radio-2">No</label>
                                    </div>
                                    <small>Do you have a written business plan</small>
                                </div>
                            </div>

                            <div class="media pad-top bord-top">

                            </div>
                            <div class="form-group{{ $errors->has('focus') ? ' has-error' : '' }}">
                                <label for="focus" class="col-md-4 control-label">Your Customer</label>

                                <div class="col-md-6">
                                    <textarea id="demo-textarea-input" rows="5" class="form-control" placeholder="Who do you sell your products to" name="focus"></textarea>
                                    @if ($errors->has('focus'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('focus') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="media pad-top bord-top">

                            </div>
                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Bank Finance</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <!-- Inline radio buttons -->
                                        <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="sex" value="Male" checked>
                                        <label for="demo-inline-form-radio">Yes</label>

                                        <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="sex" value="Female">
                                        <label for="demo-inline-form-radio-2">No</label>
                                    </div>
                                    <small class="text-muted">Have you approached any bank for financing</small>
                                </div>
                            </div>












                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Save
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="media pad-top bord-top">
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
