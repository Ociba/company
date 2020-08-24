{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
--}}
<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        @include('frontlayouts.title')
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('frontlayouts.css')
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home1">
   <div class="full-width-header">
       
   @include('frontlayouts.menu')

   </div>
   <!--Full width header End-->

	@include('frontlayouts.form')
	<!--Banner Section End-->
		
		<!-- Services Start -->
    @include('frontlayouts.welcome')
    <!-- Services Start -->

       <!-- Work so we have done -->
       @include('frontlayouts.our-work')
       <!-- Work so we have done end -->

        <!-- Services Start -->
        {{--@include('frontlayouts.services')--}}
        <!-- Services End -->

        <!-- Team Start -->
        @include('frontlayouts.team')
        <!-- Team End -->

        <!-- Video Start -->
        @include('frontlayouts.video')
        <!-- Video End -->
     
        <!-- Latest News Start -->
        @include('frontlayouts.events')
        <!-- Counter Up Section Start-->

        @include('frontlayouts.count')
        <!-- Counter Down Section End -->

        <!-- publication Section End -->
        {{--@include('frontlayouts.publication')--}}
        <!-- publication Section End -->

        <!-- ABOUT Section End -->
        @include('frontlayouts.our-say')
        <!-- ABOUT Section End -->
        
        <!-- Partner Start -->
        @include('frontlayouts.partner')
        <!-- Partner End -->
       
        <!-- Footer Start -->
        @include('frontlayouts.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
		
		<!-- Canvas Menu start -->
        @include('frontlayouts.canvas-menu')
        <!-- Canvas Menu end -->
        
        <!-- Search Modal Start -->
        @include('frontlayouts.search')
        <!-- Search Modal End --> 
        
        @include('frontlayouts.javascript')
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 07:25:07 GMT -->
</html>
