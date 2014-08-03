<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body data-page="dashboard">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('includes.header')
</nav>

<div id="wrapper">

    <!-- sidebar content -->
    <nav id="sidebar">
        @include('includes.sidebar')
    </nav>

    <!-- main content -->
    <div id="main-content" class="dashboard">
        @yield('content')
    </div>

    <nav id="menu-right">
        @include('includes.right')
    </nav>

</div>

<footer class="row">
    @include('includes.footer')
</footer>

</body>
</html>