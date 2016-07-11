@extends('layout.master')

@section('scripts')
  {!! HTML::script('scripts/App/Routes.js') !!}
  {!! HTML::script('scripts/App/Controllers/PagesController.js') !!}
  {!! HTML::script('scripts/App/Controllers/Author/AuthorsController.js') !!}
  {!! HTML::script('scripts/App/Controllers/Author/CreateAuthorController.js') !!}
  {!! HTML::script('scripts/App/Controllers/Author/EditAuthorController.js') !!}
@endsection


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

<div style="padding:15px;">
    <div ng-view>

    </div>

    <div style="clear:both"></div>
</div>

@endsection
