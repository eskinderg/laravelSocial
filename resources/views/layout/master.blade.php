<!DOCTYPE HTML>

<html lang="eng"  ng-app="todoApp">

  <head>
    <meta charset="utf-8">
    <title>Social</title>
    <meta name="viewport" content="width=device-width">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.min.js"></script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css">

    {!! HTML::script('scripts/App/App.js') !!}

    {!! HTML::style('css/style.css')!!}

  </head>

  <body style="padding-top:60px;">
   <header>
        @include('layout.header')
   </header>

    <div class='container'>

        @include('partials.flash')

        @yield('content')
    </div>


  </body>

</html>
