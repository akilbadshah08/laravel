@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="post" action="http://localhost/emailcampiagn/public/index.php/campiagn/">
                        {{csrf_field()}}
                        <input type="text" name="campiagn[title]">
                        <input type="text" name="campiagn[description]">
                        <input type="submit" name="submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
