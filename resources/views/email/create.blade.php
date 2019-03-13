@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="post" action="http://localhost/emailcampiagn/public/index.php/email/">
                        {{csrf_field()}}
                        {!! select('campiagn',$campiagns,'0','form-control') !!}
                        <input type="text" name="email[email]">
                        <input type="submit" name="submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
