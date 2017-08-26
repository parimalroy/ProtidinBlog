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
            @foreach($getAllBlogs as $getAllBlog)
            <div class="related-posts-grid">
                <a href="#"><img src="{{asset($getAllBlog->blog_image)}}" height="200px" width="200px" alt=" " /></a>
                <h4><a href="{{url('read-more/'.$getAllBlog->blog_id)}}">{{$getAllBlog->blog_title}}</a></h4>
                <p>{{$getAllBlog->blog_short_description}}</p>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="comments">
        <h4>Comments</h4>
        @foreach($commentByBlogsId as $commentByBlogId)
        <div class="comments-info">
            <div class="cmnt-icon-left">
                <!--<a href="#"><img src="images/icon3.png" alt=""/></a>-->
            </div>
            <div class="cmnt-icon-right">
                <p>{{$commentByBlogId->	created_at}}</p>
                <p><a href="#">{{$commentByBlogId->name}}</a></p>
                <p class="cmmnt">{{$commentByBlogId->comment}}</p>
            </div>
            <div class="clearfix"> </div>
            <div class="aliqua">
                <!--<a href="#">Reply</a>-->
            </div>
        </div>
        @endforeach
    </div>
    @if( Auth::user()!==null)
    <div class="consequat">
        <h4>Leave Your Comment Here</h4>
        <form action="{{url('save-comment')}}" method="POST">
            {{csrf_field()}}
            <table class="table">
                <tr>
                    <td>
                        <textarea name="comment" rows="3" ></textarea> 
                        <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden"  name="blog_id" value="{{$blogById->blog_id}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn btn-lg btn-primary" value="Post Comments" name="btn">
                    </td>
                </tr>
            </table>


        </form>
    </div>
    @endif
</div>

@endsection
