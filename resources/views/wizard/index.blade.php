@extends('layout.master')





@section('content')



    <h3>This is your Wizard page</h3>

    <div id="links" style="padding:8px;">

        <a href="#/Page1">Page1</a> |
        <a href="#/Page2">Page2</a> |
        <a href="#/Page3">Page3</a> |
        <a href="#/Authors">Authors</a> |
        <a href="#/create">New</a>

    </div>

<div style="padding:15px;">
    <div ng-view>

    </div>

    <div style="clear:both"></div>
</div>
    {!! HTML::script('scripts/route.js') !!}

@endsection
