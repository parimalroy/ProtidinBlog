@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #EEEADE">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    well come <p class="text text-primary"> {{ Auth::user()->name }}</p>.if you have any queary please contect with us. Thank you.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
