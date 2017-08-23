@extends('admin.layouts.master')
@section('title')
Add Categories
@endsection
@section('content')
<div style="height: 135px"></div>
<div class="row">
    <div class="col-lg-12" style="height: 600px">
        <section class="panel">
            <header class="panel-heading">
                Blog Form <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <!--                <div class=" form">-->
                {!! Form::open(['url' => 'blog-save','method'=> 'POST','enctype'=> 'multipart/form-data','class'=> 'cmxform form-horizontal']) !!}
                <div class="form-group ">
                    <label for="blog_title" class="control-label col-lg-3">Blog Title</label>
                    <div class="col-lg-6">
                        <input class=" form-control" name="blog_title" minlength="2" type="text" >
                    </div>
                </div>
                <div class="form-group ">
                    <label for="categorie_name" class="control-label col-lg-3">Categorie Name</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="categorie_id">
                            <option>Select Status</option>
                            @foreach($publishCategories as $publishCategorie)
                            <option value="{{$publishCategorie->id}}">{{$publishCategorie->categorie_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="blog_short_description" class="control-label col-lg-3">Short Description</label>
                    <div class="col-lg-6">
                        <textarea class="form-control " name="blog_short_description" rows="4" ></textarea>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="blog_description" class="control-label col-lg-3">Description</label>
                    <div class="col-lg-6">
                        <textarea class="form-control " name="blog_description" rows="8" ></textarea>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="date" class="control-label col-lg-3">Date</label>
                    <div class="col-lg-6">
                        <input class=" form-control" id="datepicker" name="date" minlength="2" type="text" >
                    </div>
                </div>
                <div class="form-group ">
                    <label for="blog_image" class="control-label col-lg-3">Blog Image</label>
                    <div class="col-lg-6">
                        <input name="blog_image" minlength="2" type="file" accept="image/*" >
                    </div>
                </div>
                <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-3">Publication Status</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="publication_status">
                            <option>Select Status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-offset-3 col-lg-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save Product">
                </div>

                {!! Form::close() !!}
                <!--                </div>-->

            </div>
        </section>
    </div>
</div>

@endsection