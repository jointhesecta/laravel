<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Pixit - Responsive Boostrap3 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    {{ HTML::style('assets/css/icons/icons.min.css'); }}
    {{ HTML::style('assets/css/bootstrap.min.css'); }}
    {{ HTML::style('assets/css/plugins.min.css'); }}
    {{ HTML::style('assets/css/style.min.css'); }}
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    {{ HTML::style('assets/css/animate-custom.css'); }}
    <!-- END PAGE LEVEL STYLE -->
    {{ HTML::script('assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js'); }}
</head>

<body class="login fade-in" data-page="login">
<!-- BEGIN LOGIN BOX -->
<div class="container" id="login-block">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="login-box clearfix animated flipInY">
                <div class="page-icon animated bounceInDown">
                    <img src="assets/img/account/user-icon.png" alt="Key icon">
                </div>
                <div class="login-logo">
                    <a href="#?login-theme-3">
                        <img src="assets/img/account/login-logo.png" alt="Company Logo">
                    </a>
                </div>
                <hr>

                <div class="login-form">
                    <!-- BEGIN ERROR BOX -->
                    @if (Session::get('loginError'))
                    <div class="alert alert-danger ">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4>Error!</h4>
                        {{ Session::get('loginError') }}
                    </div>
                    @endif

                    @if($errors->isEmpty())
                    <div class="alert alert-danger hide">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4>Error!</h4>
                        {{ $errors->first('email') }}
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                    <!-- END ERROR BOX -->
                    {{ Form::open(array('url' => 'login')) }}
                        {{ Form::text('email', Input::old('email'), array('placeholder' => 'Correo electronico','class' => 'input-field form-control user')) }}
                        {{ Form::password('password', array('placeholder' => 'Password','class' => 'input-field form-control password')) }}
                        {{ Form::submit('Login', array('class' => 'btn btn-login')) }}
                    {{ Form::close() }}
                    <div class="login-links">
                        <a href="password_forgot.html">Forgot password?</a>
                        <br>
                        <a href="signup.html">Don't have an account? <strong>Sign Up</strong></a>
                    </div>
                </div>

            </div>
            <div class="social-login row">
                <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                    <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
                </div>
                <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                    <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOCKSCREEN BOX -->
<!-- BEGIN MANDATORY SCRIPTS -->
{{ HTML::script('assets/plugins/jquery-1.11.js'); }}
{{ HTML::script('assets/plugins/jquery-migrate-1.2.1.js'); }}
{{ HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js'); }}
{{ HTML::script('assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js'); }}
{{ HTML::script('assets/plugins/bootstrap/bootstrap.min.js'); }}
{{ HTML::script('assets/plugins/jquery.cookie.min.js" type="text/javascript'); }}
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('assets/plugins/backstretch/backstretch.min.js'); }}
{{ HTML::script('assets/js/account.js'); }}
<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
