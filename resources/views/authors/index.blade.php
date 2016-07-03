@extends('layout.master')

{{-- @section('title', 'Authors') --}}

@section('scripts')
  {!! HTML::script('scripts/App/Controllers/Author/AuthorsController.js') !!}
@endsection


@section('content')

    @foreach ($authors as $author)

      {{-- <li> <a href="author/{{ $author->id }}"> {{$author->name}} </a> </li> --}}

    @endforeach


@foreach ($paginatedAuthors as $author)

   {{--<li>{{ $author->name }}</li> --}}

@endforeach

<?php //echo $paginatedAuthors->render(); ?>





<div ng-controller="AuthorsController">

    <br><br>
    <div ui-grid="gridOptions" ui-grid-selection class="grid"></div>
</div>


@endsection
