<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
    <title>Matthew Palencia</title>
    <meta name="description" content="">  
    <meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/media-query.css') }}">

    @yield('stylesheets')

   <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

   <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
    
   </header> <!-- end header -->


   @yield('content')

   
   <!-- footer
   ================================================== -->
   <footer>

      <div class="footer-bottom">
        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <!--
                    <span>© Copyright Abstract 2016</span> 
                    <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span> 
                    -->                 

                 </div>

                 <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                 </div>         
            </div>

        </div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
        <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

   @yield('scripts')

</body>

</html>