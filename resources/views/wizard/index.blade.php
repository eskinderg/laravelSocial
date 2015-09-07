@extends('layout.master')





@section('content')



    <h3>This is your Wizard page</h3>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav" style="color:black ! important;">

               <li class="">
                 <a href="#/Page1">
                     <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                     Page1
                 </a>
               </li>


               <li>
                 <a href="#/Page2">
                     <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                     Page2
                 </a>

               </li>

               <li>
                 <a href="#/Page3">
                     <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                     Page3
                 </a>

               </li>


               <li>
                 <a href="#/Authors">
                     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     Authors
                 </a>

               </li>

               <li>
                 <a href="#/create">
                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                     New Author
                 </a>

               </li>


         </ul>
    </div>


















<!--
    <div class="btn-group btn-group-justified" role="group" aria-label="...">

        <div class="btn-group" role="group">
            <a href="#/Page1"><button type="button" class="btn btn-default">Page1</button></a>
        </div>

        <div class="btn-group" role="group">
            <a href="#/Page2"><button type="button" class="btn btn-default">Page2</button></a>
        </div>

        <div class="btn-group" role="group">
            <a href="#/Page3"><button type="button" class="btn btn-default">Page3</button></a>
        </div>

        <div class="btn-group" role="group">
            <a href="#/Authors"><button type="button" class="btn btn-default">Authors</button></a>
        </div>

        <div class="btn-group" role="group">
            <a href="#/create" class=" glyphicon glyphicon-plus" style="color:grey;font-size:20px;margin-left:10px;"></a>
        </div>

    </div>
-->
<!--
    <div id="links" style="padding:8px;">

        <a href="#/Page1">Page1</a> |
        <a href="#/Page2">Page2</a> |
        <a href="#/Page3">Page3</a> |
        <a href="#/Authors">Authors</a>
        <a href="#/create" class=" glyphicon glyphicon-plus" ></a>
    </div>
-->
<div style="padding:15px;">
    <div ng-view>

    </div>

    <div style="clear:both"></div>
</div>
    {!! HTML::script('scripts/route.js') !!}

@endsection
