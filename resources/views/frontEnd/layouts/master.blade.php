<!DOCTYPE html>


<html>
    <head>
        <title>Floral a Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <link href="{{asset('public/frontEnd/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('public/frontEnd/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- js -->
        <script src="{{asset('public/frontEnd/')}}/js/jquery.min.js"></script>
        <!-- //js -->
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Floral Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="{{asset('public/frontEnd/')}}/js/move-top.js"></script>
        <script type="text/javascript" src="{{asset('public/frontEnd/')}}/js/easing.js"></script>
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
        </script>
        <!-- start-smoth-scrolling -->
    </head>

    <body>
        <!-- header -->
        <div class="header">
            <div class="container">
                @include('frontEnd.layouts.header')
            </div>
        </div>
        <!-- header -->
        <!-- content -->
        <!--        <div class="content">-->
        <div class="container">
            <!--<div class="content-text">-->	
            @yield('content')
            <div class="categories">
                <?php if ($categorie == 1) { ?>
                    <div class="categ">
                        <div class="cat">
                            <h3>Categories</h3>
                            @foreach($allPublicationCategories as $allPublicationCategorie)
                            <ul>
                                <li><a href="{{url('categorie-details/'.$allPublicationCategorie->id)}}">{{$allPublicationCategorie->categorie_name}}</a></li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="recent-com">
                            <h3>Recent Blogs</h3>
                            @foreach($blogsById as $blogById)
                            <ul>
                                <li><a href="{{url('read-more/'.$blogById->blog_id)}}">{{$blogById->blog_title}}</li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="view">
                            <a href="{{url('/')}}">View More</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--            </div>
                        </div>
                
        <!-- //content -->
        <!-- footer -->
        @include('frontEnd.layouts.footer')
        <!-- //footer -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <script src="{{ asset('public/js/app.js') }}"></script>
    </body>
</html>