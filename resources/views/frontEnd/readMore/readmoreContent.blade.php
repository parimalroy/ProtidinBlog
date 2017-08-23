@extends('frontEnd.layouts.master')
@section('content')


<div class="title">
    @foreach($blogsById as $blogById)
    <div class="some-title">
        <h3>{{$blogById->blog_title}}</h3>
    </div>
    <div class="john">
        <p><a href="#">{{$blogById->blogger_name}}</a><span>{{$blogById->date}}</span></p>
    </div>
    <div class="clearfix"> </div>
    <div class="tilte-grid">
        <img src="{{asset($blogById->blog_image)}}" alt=" " />
        <p class="vel">{{$blogById->blog_description}}</p> 
    </div>
    @endforeach
    <div class="related-posts">
        <h3>Related Posts</h3>
        <div class="related-posts-grids">
            <div class="related-posts-grid">
                <a href="#"><img src="{{asset('public/frontEnd/')}}/images/5.jpg" alt=" " /></a>
                <h4><a href="#">Maecenas pulvinar</a></h4>
                <p>Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
                    enim sit amet volutpat sodales, lorem velit fringilla metus, et
                    semper metus sapien non odio. Nulla facilisi.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="comments">
        <h4>Comments</h4>
        <div class="comments-info">
            <div class="cmnt-icon-left">
                <a href="#"><img src="{{asset('public/frontEnd/')}}/images/icon3.png" alt=""/></a>
            </div>
            <div class="cmnt-icon-right">
                <p>MAY 13, 2015</p>
                <p><a href="#">Admin</a></p>
                <p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="clearfix"> </div>
            <div class="aliqua">
                <a href="#">Reply</a>
            </div>
        </div>
        <div class="comments-info">
            <div class="cmnt-icon-left">
                <a href="#"><img src="{{asset('public/frontEnd/')}}/images/icon3.png" alt=""/></a>
            </div>
            <div class="cmnt-icon-right">
                <p>MAY 13, 2015</p>
                <p><a href="#">Admin</a></p>
                <p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="clearfix"> </div>
            <div class="aliqua">
                <a href="#">Reply</a>
            </div>
        </div>


    </div>
    <div class="consequat">
        <h4>Leave Your Comment Here</h4>
        <form>
            <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Name';
                    }" required="">
            <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Email';
                    }" required="">
            <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Subject';
                    }" required="">
            <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Message...';
                    }" required="">Message...</textarea>
            <input type="submit" value="Submit" class="btn btn-success btn-lg">
        </form>
    </div>
</div>

@endsection
