<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Matthew Palencia</title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="js/ie-emulation-modes-warning.js"></script>

    @yield('stylesheets')

   <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

  </head>

  <body id="top">
    
    <!-- header 
   ================================================== -->
   <header class="short-header">   

    <div class="gradient-block"></div>  

    <div class="row header-content">

        <div class="logo">
            <a href="/">Author</a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li><a href="/" title="">Home</a></li> 
                @if (Auth::check())
                  <li><a href="/posts" title="">Post</a></li> 
                  <li><a href="/categories" title="">Categories</a></li> 
                  <li><a href="/tags" title="">Tags</a></li>   
                  <li><a href="/logout" title="">Logout</a></li>  
                @else
                  <li><a href="/login" title="">Login</a></li>  
                @endif

            </ul>
        </nav> <!-- end main-nav-wrap -->

    </div>          
    
   </header><br> <!-- end header -->

    <div class="container">
      @yield('content')
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
