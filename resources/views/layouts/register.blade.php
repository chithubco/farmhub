<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <script src="https://use.fontawesome.com/4ad261602e.js"></script>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{URL::asset('app/css/bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ URL::asset('app/css/nifty.min.css') }}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ URL::to('app/css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">



    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ URL::to('app/css/demo/nifty-demo.min.css') }}" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/magic-check/css/magic-check.min.css') }}" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/switchery/switchery.min.css') }}" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/chosen/chosen.min.css') }}" rel="stylesheet">


    <!--noUiSlider [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/noUiSlider/nouislider.min.css') }}" rel="stylesheet">


    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/select2/css/select2.min.css') }}" rel="stylesheet">


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{ URL::to('app/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ URL::to('app/plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ URL::to('app/plugins/pace/pace.min.js') }}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{ URL::to('app/js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ URL::to('app/js/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ URL::to('app/js/nifty.min.js') }}"></script>



    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="{{ URL::to('app/js/demo/bg-images.js') }}"></script>

    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{ URL::to('app/js/demo/nifty-demo.min.js') }}"></script>


    <!--Switchery [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/switchery/switchery.min.js') }}"></script>


    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>


    <!--Chosen [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/chosen/chosen.jquery.min.js') }}"></script>


    <!--noUiSlider [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/noUiSlider/nouislider.min.js') }}"></script>


    <!--Select2 [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/select2/js/select2.min.js') }}"></script>


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src="{{ URL::to('app/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>


    <!--Form Component [ SAMPLE ]-->
    <script src="{{ URL::to('app/js/demo/form-component.js') }}"></script>




    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="cls-container">


    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay"></div>

@yield('content')


<!-- DEMO PURPOSE ONLY -->
    <!--===================================================-->
    <div class="demo-bg">
        <div id="demo-bg-list">
            <div class="demo-loading"><i class="psi-repeat-2"></i></div>
            <img class="demo-chg-bg bg-trans active" src="{{ URL::to('app/img/bg-img/thumbs/bg-trns.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-1.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-2.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-3.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-4.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-5.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-6.jpg') }}" alt="Background Image">
            <img class="demo-chg-bg" src="{{ URL::to('app/img/bg-img/thumbs/bg-img-7.jpg') }}" alt="Background Image">
        </div>
    </div>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


</body>
</html>
