@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   @foreach($campiagns as $campiagn)
                    <li> <h3>{{$campiagn->title}}</h3> {{$campiagn->description}}<br></li>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
