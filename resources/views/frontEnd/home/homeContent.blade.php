@extends('frontEnd.layouts.master')


@section('content')
<div class="title">
    <div class="some-title">
        <h3><a href="single.html">Some Tittle Goes Here</a></h3>
    </div>
    <div class="john">
        <p><a href="#">John Doe</a><span>May.26.2011</span></p>
    </div>
    <div class="clearfix"> </div>
    <div class="tilte-grid">
        <a href="single.html"><img src="{{asset('public/frontEnd/')}}/images/1.jpg" alt=" " /></a>
        <p class="vel"><a href="single.html">Phasellus vel arcu vitae neque sagittis aliquet ac at purus.
                Vestibulum varius eros in dui sagittis non ultrices orci hendrerit.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </a></p>
        <p class="Sed">
            <span><label>Sed euismod feugiat sodales.</label> Vivamus dui ipsum, laoreet 
                vitae euismod sit amet, euismod ac est. Sed turpis massa,
                convallis vitae facilisis eget, malesuada ullamcorper nibh. 
                Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
                enim sit amet volutpat sodales, lorem velit fringilla metus, et
                semper metus sapien non odio. Nulla facilisi.<a href="#" class="gravida">Praesent gravida suscipit leo,</a> 
                eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum.</span></p> 
    </div>
    <div class="read">
        <a href="{{url('read-more')}}">Read More</a>
    </div>
    <div class="border">
        <p>a</p>
    </div>
    <div class="some-title">
        <h3><a href="single.html">Some Tittle Goes Here</a></h3>
    </div>
    <div class="john">
        <p><a href="#">John Doe</a><span>May.26.2011</span></p>
    </div>
    <div class="clearfix"> </div>
    <div class="tilte-grid">
        <a href="single.html"><img src="{{asset('public/frontEnd/')}}/images/2.jpg" alt=" " /></a>
        <p class="vel"><a href="single.html">Phasellus vel arcu vitae neque sagittis aliquet ac at purus.
                Vestibulum varius eros in dui sagittis non ultrices orci hendrerit.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
        <p class="Sed"><span><label>Sed euismod feugiat sodales.</label> Vivamus dui ipsum, laoreet 
                vitae euismod sit amet, euismod ac est. Sed turpis massa,
                convallis vitae facilisis eget, malesuada ullamcorper nibh. 
                Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
                enim sit amet volutpat sodales, lorem velit fringilla metus, et
                semper metus sapien non odio. Nulla facilisi.<a href="#" class="gravida">Praesent gravida suscipit leo,</a> 
                eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum.</span></p> 
    </div>
    <div class="read">
        <a href="single.html">Read More</a>
    </div>
    <div class="border1">
        <div class="pre">
            <a href="#">Prev</a>
        </div>
        <div class="number">
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">11</a></li>
                <li><a href="#">12</a></li>
            </ul>
        </div>
        <div class="next">
            <a href="#">Next</a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection
