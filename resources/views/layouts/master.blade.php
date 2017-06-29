<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{{ config('knightcorp.files.favicon') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>KnightCorp Insurance Broker | Perth @yield('title')</title>

<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

<!-- Styles -->
<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="/css/style.css" type="text/css" />
<link rel="stylesheet" href="/css/dark.css" type="text/css" />
<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="/css/animate.css" type="text/css" />
<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="/css/custom-styles.css" type="text/css" />
<link rel="stylesheet" href="/css/components/bs-switches.css" type="text/css" />
<link rel="stylesheet" href="/css/components/radio-checkbox.css" type="text/css" />
<!-- <link rel="stylesheet" href="demos/travel/css/datepicker.css" type="text/css" /> -->
<link rel="stylesheet" href="/css/components/timepicker.css" type="text/css" />
<link rel="stylesheet" href="/css/components/daterangepicker.css" type="text/css" />
<link rel="stylesheet" href="/css/responsive.css" type="text/css" />

@yield('header_css')

<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body class="stretched no-transition side-header side-header-left open-header close-header-on-scroll get-a-quote">

<div id="wrapper" class="clearfix">

@include('shared.main-menu')

    <div class="header-logo-centered">
        <div class="container clearfix center">
            <div id="" class="nobottomborder">
                <a href="/" class="standard-logo" data-dark-logo="{{ config('knightcorp.files.logo') }}"><img src="{{ config('knightcorp.files.logo') }}" alt="KnightCorp Logo" class="header-img-margin-lg"></a>
            </div>
            <div class="fright header-btn">
                <a id="header_getAquote" data-toggle="modal" data-target=".bs-example-modal-lg" href="#" class="button button-rounded button-reveal button-small button-thin"><i class="icon-file-alt"></i><span>{{ trans('messages.buttons.get_a_quote') }}</span></a>
                <a href="{{ route('contact_us') }}" class="button button-rounded button-reveal button-small button-thin"><i class="icon-phone3"></i><span>{{ trans('messages.buttons.get_in_contact') }}</span></a>
            </div>
        </div>
    </div>

@yield('header_section')

    @if (isset($homePage))
        <!-- Banner -->
        @include('shared.home_banner')

        <section id="content" >

            <div class="content-wrap nobottompadding">
                    
                @yield('content')

            </div>

        </section>
        <!-- Modal Container -->
        @include('shared.home_modal')
        <!-- PopUpBox and Message Container -->
        @include('shared.home_popup_container')

    @else

    <section id="content" >

        <div class="content-wrap">

            <div class="container clearfix">

                @yield('content')

            </div>

        </div>

    </section>

    @endif

    <footer id="footer" class="dark">

        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; {{ date('Y') }} All Rights Reserved by KnightCorp<br>
                    <div class="copyright-links"><a href="/terms">Terms of Use</a> / <a href="/privacy-policy">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <i class="icon-envelope2"></i> insurance@knightcorp.net.au <span class="middot">&middot;</span> <i class="icon-headphones"></i> +61 1300 656 001
                </div>

            </div>

        </div>

    </footer>

</div>

<div id="gotoTop" class="icon-angle-up"></div>

@if (!isset($homePage))
<script type="text/javascript" src="/bower_components/prototypejs/dist/prototype.min.js"></script>
@endif
<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
@yield('footer_js')

</body>
</html>
