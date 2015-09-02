@extends('layout.master')





@section('content')



    <h3>This is your Wizard page</h3>

    <div id="links" style="padding:8px;">

        <a href="#!/Page1">Page1</a> | <a href="#!/Page2">Page2</a> | <a href="#!/Page3">Page3</a>

    </div>

    <div ng-view style="border:1px solid grey;padding:15px;">

    </div>

    {!! HTML::script('scripts/route.js') !!}
    
@endsection
