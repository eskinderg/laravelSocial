@extends('layout.master')

@section('title','home')


@section('content')

  <h1>
    Welcome {{ $currentUser->firstname or 'guest'}} , This is your home page
  </h1>

  @if($currentUser)


        <?php  $messages = App\User::find($currentUser->id)->messages; ?>
          {{ $messages }}

  @endif
@endsection
