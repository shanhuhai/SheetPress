<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('frontend/css/blog.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{ URL::asset('frontend/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script src="{{ URL::asset('frontend/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="{{ URL::asset('fontend/js/ie10-viewport-bug-workaround.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item{{ Request::is('/') ? ' active' : null }}" href="{{ URL::route('home.index') }}">Home</a>
            <a class="blog-nav-item{{ Request::is('about') ? ' active' : null }}" href="{{ URL::route('home.about') }}">about</a>

        </nav>
    </div>
</div>


<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Shanhuhai->blog;</h1>
        <p class="lead blog-description">Just a coder</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
            @yield('main')
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            @section('sidebar')
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Just a Coder</p>
            </div>

            <div class="sidebar-module">
                <h4>Follow me</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
            @show
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->



<div class="blog-footer">
    <p>Powered by Shanhuhai</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</div>

<script src="{{ URL::asset('backend/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/docs.min.js') }}"></script>
</body>
</html>
