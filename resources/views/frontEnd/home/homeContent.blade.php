@extends('frontEnd.layouts.master')


@section('content')
<div class="title">
     @foreach($publishBlogs as $publishBlog)
    <div class="some-title">
        <h3><a href="single.html">{{$publishBlog->blog_title}}</a></h3>
    </div>
    <div class="john">
        <p><a href="#">{{$publishBlog->blogger_name}}</a><span>{{$publishBlog->date}}</span></p>
    </div>
    <div class="clearfix"> </div>
    <div class="tilte-grid">
        <a href="single.html"><img src="{{asset($publishBlog->blog_image)}}" alt=" " /></a>
            <p>{{$publishBlog->blog_short_description}}</p> 
    </div>
    <div class="read">
        <a href="{{url('read-more/'.$publishBlog->blog_id)}}">Read More</a>
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
@endsection
