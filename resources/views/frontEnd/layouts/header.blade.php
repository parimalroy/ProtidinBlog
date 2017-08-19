
<div class="header-info">
    <div class="logo">
        <a href="index.html"><img src="{{asset('public/frontEnd/')}}/images/logo.png" alt=" " /></a>
    </div>
    <div class="logo-right">
        <span class="menu"><img src="{{asset('public/frontEnd/')}}/images/menu.png" alt=" "/></span>
        <ul class="nav1">
            <li class="cap"><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="tutorials.html">Tutorials</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
    </div>
    <div class="clearfix"> </div>
    <!-- script for menu -->
    <script>
        $("span.menu").click(function () {
            $("ul.nav1").slideToggle(300, function () {
                // Animation complete.
            });
        });
    </script>
    <!-- //script for menu -->
</div>
