@extends('layouts.register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <img src="{{ URL::to('app/img/fmdb_logo.png') }}">

                    <div class="panel-heading"><h1 class="page-header text-overflow">FarmHub Farmers Registeration Form</h1></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Mobile Phone</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" placeholder="08057775603" class="form-control" name="phone_number" value="{{ session('phone_number') }}">

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
                                    <input id="name" type="text" class="form-control" placeholder="M & C FARMS LTD" name="business_name" value="{{ old('business_name') }}">
                                    <small class="text-muted">If applicable</small>
                                    @if ($errors->has('business_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="media pad-top bord-top">

                            </div>
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" PLACEHOLDER="MUSA" name="first_name" value="{{ old('first_name') }}">

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Middle Name</label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text" placeholder="James" class="form-control" name="middle_name" value="{{ old('middle_name') }}">

                                    @if ($errors->has('middle_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" placeholder="Adebayo" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="emeka.musa@gmail.com" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="media pad-top bord-top">

                            </div>

                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Sex</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <!-- Inline radio buttons -->
                                        <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="sex" value="Male" checked>
                                        <label for="demo-inline-form-radio">Male</label>

                                        <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="sex" value="Female">
                                        <label for="demo-inline-form-radio-2">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                                <div class="col-md-6">
                                    <div id="demo-dp-component">
                                        <div class="input-group date">
                                            <input type="date" class="form-control" name="dob">
                                            <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                        </div>
                                        <small class="text-muted">When were you born</small>
                                    </div>

                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Contact Address</label>

                                <div class="col-md-6">
                                    <textarea id="demo-textarea-input" rows="5" class="form-control" placeholder="Where do you leave" name="address"></textarea>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" placeholder="Ikeja" class="form-control" name="city" value="{{ old('city') }}">

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('_state') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">State</label>

                                <div class="col-md-6">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="_state">
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="Akwa">Akwa Ibom</option>
                                        <option value="Anambara">Anambara</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Eboyin">Eboyin</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Abuja">Abuja</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Kastina">Kastina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zanfara">Zanfara</option>
                                    </select>

                                    @if ($errors->has('_state'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('_state') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('alt_phone') ? ' has-error' : '' }}">
                                <label for="alt_phone" class="col-md-4 control-label">Alternate Phone</label>

                                <div class="col-md-6">
                                    <input id="alt_phone" type="text" placeholder="08057775603" class="form-control" name="alt_phone" value="{{ old('alt_phone') }}">
                                    <small class="text-muted">Do you have a second phone</small>
                                    @if ($errors->has('alt_phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('alt_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="media pad-top bord-top">

                            </div>

                            <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                                <label for="education" class="col-md-4 control-label">Higest Education</label>

                                <div class="col-md-6">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="education">
                                        <option value="None">None</option>
                                        <option value="Primary">Primary</option>
                                        <option value="Secondary">Secondary</option>
                                        <option value="University">Univeristy</option>
                                        <option value="Postgrad">Postgrad</option>
                                        <option value="Doctoral">Doctoral</option>
                                        <option value="Professor">Professor</option>
                                    </select>
                                    <small class="text-muted">Your highest Educational Qualification is?</small>
                                    @if ($errors->has('education'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yoe') ? ' has-error' : '' }}">
                                <label for="yoe" class="col-md-4 control-label">Experience Level</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="yoe" maxlength="3" placeholder="15">
                                    <small class="text-muted">How long have you been farming in years</small>
                                </div>

                            </div>

                            <div class="media pad-top bord-top">

                            </div>
                            <div class="form-group{{ $errors->has('segment') ? ' has-error' : '' }}">
                                <label for="segment" class="col-md-4 control-label">Agric Segment</label>

                                <div class="col-md-6">
                                    <select class="selectpicker" data-live-search="true" data-width="100%" name="segment">
                                        <option value="Crop">Crop</option>
                                        <option value="Animal">Animal Husbandry</option>
                                        <option value="Input">Input Suppliers</option>
                                        <option value="Mechanisation">Mechanisation</option>
                                        <option value="Education">Education</option>
                                        <option value="Extension">Extension Services</option>
                                        <option value="Consultancy">Consultancy</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Logistics">Logistics</option>
                                        <option value="Storage">Stroage</option>
                                        <option value="Marketing">Marketing & Sales</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <small class="text-muted">What area of agriculture do you specialise?</small>
                                    @if ($errors->has('segment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('segment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('focus') ? ' has-error' : '' }}">
                                <label for="focus" class="col-md-4 control-label">Explain your business</label>

                                <div class="col-md-6">
                                    <textarea id="demo-textarea-input" rows="5" class="form-control" placeholder="Tell us what specificly thing you do" name="focus"></textarea>
                                    @if ($errors->has('focus'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('focus') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('constraint') ? ' has-error' : '' }}">
                                <label for="constraint" class="col-md-4 control-label">Your Challenges</label>

                                <div class="col-md-6">
                                    <textarea id="demo-textarea-input" rows="5" class="form-control" placeholder="Tell us your specific challenges" name="constraint"></textarea>
                                    @if ($errors->has('constraint'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('constraint') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <label for="focus" class="col-md-4 control-label">Let Us know Your Comments</label>

                                <div class="col-md-6">
                                    <textarea id="demo-textarea-input" rows="5" class="form-control" placeholder="Tell us what specificly thing you do" name="comment"></textarea>
                                    @if ($errors->has('comment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                    @endif
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
