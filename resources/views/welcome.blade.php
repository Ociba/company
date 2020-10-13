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
        <!--Comments-->
        @include('frontlayouts.comments')
        <!--End of comment-->
       
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
