<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js sidebar-large">
<!--<![endif]-->

<head>
    @include('includes.head')
</head>
<body data-page="dashboard" class="breakpoint-1200">

    <nav id="menu-right" class="mm-menu mm-horizontal mm-ismenu mm-right mm-hassearch">
        @include('includes.right')
    </nav>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('includes.header')
    </nav>

    <div class="mm-page">
        <div id="wrapper">

            <!-- sidebar content -->
            <nav id="sidebar" class="mCustomScrollbar">
                @include('includes.sidebar')
            </nav>

            <!-- main content -->
            <div id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

</body>
</html>