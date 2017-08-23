
<div class="header-info">
    <div class="logo">
        <h2 class="text-success"><i><strong>Protidin Blogs</strong></i></h2>
    </div>
    <div class="logo-right">
        <span class="menu"><img src="{{asset('public/frontEnd/')}}/images/menu.png" alt=" "/></span>
        <ul class="nav1">
            <li class="cap"><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{url('/')}}">Tutorials</a></li>
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
