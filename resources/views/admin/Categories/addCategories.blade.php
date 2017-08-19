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
                Form validations
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal " id="commentForm" method="get" action="" novalidate="novalidate">
                        <div class="form-group ">
                            <label for="categorie_name" class="control-label col-lg-3">Categorie Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="categorie_name" minlength="2" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="categorie_description" class="control-label col-lg-3">Description</label>
                            <div class="col-lg-6">
                                <textarea class="form-control " id="ccomment" name="categorie_description" rows="8" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ccomment" class="control-label col-lg-3">Publication Status</label>
                            <div class="col-lg-6">
                                <select class="form-control">
                                    <option>Select Status</option>
                                    <option value="1">Publish</option>
                                    <option value="0">Unpublish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>

@endsection