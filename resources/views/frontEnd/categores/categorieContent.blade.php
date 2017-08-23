@extends('frontEnd.layouts.master')

@section('content')
<br/><br/>
<!--    <div class="article-left">
      
    </div>-->
<div class="title">
    @foreach($blogByCategoriesId as $blogByCategorieId)
    <div class="some-title">
        <h3><a href="single.html">{{$blogByCategorieId->blog_title}}</a></h3>
    </div>
    <div class="john">
        <p><a href="#">{{$blogByCategorieId->blogger_name}}</a><span>{{$blogByCategorieId->date}}</span></p>
    </div>
    <div class="clearfix"> </div>
    <div class="tilte-grid">
        <a href=""><img src="{{asset($blogByCategorieId->blog_image)}}" alt=" " /></a>
        <p>{{$blogByCategorieId->blog_short_description}}</p> 
    </div>
    <div class="read">
        <a href="{{url('read-more/'.$blogByCategorieId->blog_id)}}">Read More</a>
    </div>
    @endforeach
    <div class="border">
<!--        <p>a</p>-->
    </div>

    <div class="border1">
        <div class="pre">
            <!--<a href="#"></a>-->
        </div>
        <div class="number">

        </div>
        <div class="next">
            <!--<a href="#"></a>-->
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/swipebox.css">
<script src="{{asset('public/frontEnd/')}}/js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function ($) {
    $(".swipebox").swipebox();
});
</script>
<!-- Portfolio Ends Here -->
<script type="text/javascript" src="{{asset('public/frontEnd/')}}/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
    var filterList = {
        init: function () {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });
        },
        hoverEffect: function () {
            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                    function () {
                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                    },
                    function () {
                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                    }
            );
        }
    };
// Run the show!
    filterList.init();
});
</script>
</div>
@endsection