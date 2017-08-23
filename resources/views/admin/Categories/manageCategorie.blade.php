@extends('admin.layouts.master');
@section('title')
Manage Catgegorie
@endsection
@section('content')
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Manage Categorie
            </div>
            <div>
                <table class="table" ui-jq="footable" ui-options='{
                       "paging": {
                       "enabled": true
                       },
                       "filtering": {
                       "enabled": true
                       },
                       "sorting": {
                       "enabled": true
                       }}'>
                    <thead>
                        <tr>
                            <th data-breakpoints="xs">Categorie ID</th>
                            <th>Categorie Name</th>
                            <th>Publication Status</th>
                            <th data-breakpoints="xs">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allCategories as $allCategorie)
                        <tr data-expanded="true">
                            <td>{{$allCategorie->id}}</td>
                            <td>{{$allCategorie->categorie_name}}</td>
                            <td>{{$allCategorie->publication_status==1?'Publish':'Unpublish'}}</td>
                            <td>
                                @if($allCategorie->publication_status==1)
                                <a href="{{url('categorie-publish/'.$allCategorie->id)}}" title="Unpublish" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else 
                                <a href="{{url('categorie-unpublish/'.$allCategorie->id)}}" title="Publish" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
                                <a href="{{'categorie-edit/'.$allCategorie->id}}" title="Edit" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('categorie-delete/'.$allCategorie->id)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Sure are you want to delete !!')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

@endsection