@extends('layout.master')

@section('title',$title)

@section('content')

  <a href=" {{ URL::to('/authors') }} ">Back</a>


  <h1>{{ $author->name }}</h1>
  <p> {{ $author->bio }}</p>

@endsection
