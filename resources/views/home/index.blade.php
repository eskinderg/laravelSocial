@extends('layout.master')

@section('title','home')


@section('content')

 <!-- <h1>{{$injected}}</h1> -->

  <h1>
    Welcome {{ $currentUser->firstname or 'guest'}} , This is your home page
  </h1>

<!--	Date Time <h2>{{$CurrentDate}}</h2> -->

  @if($currentUser)
          {{-- $currentUser->messages --}}
  @endif
  

  <h3>City:&nbsp; {{$City}}</h3>
@endsection
