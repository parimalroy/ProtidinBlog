
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
            @if(Auth::user()!==null)
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li><a href="{{url('login')}}">LogIn</a></li>
            @endif
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
