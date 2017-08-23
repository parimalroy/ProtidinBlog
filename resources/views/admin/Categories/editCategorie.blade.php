@extends('admin.layouts.master')
@section('title')
Update Categories
@endsection
@section('content')
<div style="height: 135px"></div>
<div class="row">
    <div class="col-lg-12" style="height: 600px">
        <section class="panel">
            <header class="panel-heading">
               Update Categorie Form <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <!--                <div class=" form">-->
                {!! Form::open(['url' => 'categorie-update','method'=> 'POST','class'=> 'cmxform form-horizontal']) !!}
                <div class="form-group ">
                    <label for="categorie_name" class="control-label col-lg-3">Categorie Name</label>
                    <div class="col-lg-6">
                        <input class=" form-control" name="categorie_name" value="{{$categorieById->categorie_name}}" minlength="2" type="text" >
                        <input class=" form-control" name="categorie_id" value="{{$categorieById->id}}" minlength="2" type="hidden" >
                    </div>
                </div>
                <div class="form-group ">
                    <label for="categorie_description" class="control-label col-lg-3">Description</label>
                    <div class="col-lg-6">
                        <textarea class="form-control " name="categorie_description" rows="8" >{{$categorieById->categorie_description}}</textarea>
                    </div>
                </div>
                <div class="col-lg-offset-3 col-lg-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Update Categorie">
                </div>

                {!! Form::close() !!}
                <!--                </div>-->

            </div>
        </section>
    </div>
</div>

@endsection