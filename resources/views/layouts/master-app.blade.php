<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KnightCorp Admin</title>
    <link rel="shortcut icon" href="{{ config('knightcorp.files.favicon') }}">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- Styles -->
    <link href="/css/master-app-styles.css" rel="stylesheet">
</head>
<body>
    <div class="outside-wrapper">
        <div class="inner-wrapper">
            <div class="wrapper-container">
                <div class="app-logo">
                    <a href="/" title="KnightCorp Logo">
                        <img src="{{ config('knightcorp.files.logo') }}" alt="">
                    </a>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            
            $('.form-button').click(function() {
                $('.form-button span > i').remove();
                $('.form-button span').addClass('active');
                $('.form-button span').append('<i class="fa fa-cog fa-spin fa-fw"></i>');

                setTimeout(function() {
                    $('#auth-form').submit();
                }, 700);
            });

            setTimeout(function(){
                $('.alert').fadeOut('400', function(){
                    $(this).remove();
                });
            }, 10000);

            $('#rememberPasswordSpan').click(function() {
                $('#rememberPassword').trigger('click');
            });

            $('.has-error-class input').on('keyup', function(){
                $(this).css('border-color', '#DDD');
                $('.has-error-class i').css('color', '#000');
            });
        });
    </script>
</body>
</html>