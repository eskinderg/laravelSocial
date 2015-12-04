@extends('layout.master')

{{-- @section('title', 'Authors') --}}

@section('content')

    @foreach ($authors as $author)

      {{-- <li> <a href="author/{{ $author->id }}"> {{$author->name}} </a> </li> --}}

    @endforeach


@foreach ($paginatedAuthors as $author)

   {{--<li>{{ $author->name }}</li> --}}

@endforeach

<?php //echo $paginatedAuthors->render(); ?>





<div ng-controller="todoController">

    <button class ="btn btn-default" ng-click="btnload()" >Load Authors</button>


    <br><br>
    <div ui-grid="gridOptions" ui-grid-selection class="grid"></div>
</div>


@endsection
