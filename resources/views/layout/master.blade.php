<!DOCTYPE HTML>

<html lang="eng"  ng-app="todoApp">

  <head>
    <meta charset="utf-8">
    <title>Social</title>
    <meta name="viewport" content="width=device-width">



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.7/angular.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.7/angular-route.js"></script>

    <script src="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js"></script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.6.2/css/ngDialog.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.6.2/js/ngDialog.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.6.2/css/ngDialog-theme-default.css">

    {!! HTML::script('scripts/App/App.js') !!}
    {!! HTML::script('scripts/App/service.js') !!}

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

        @yield('scripts');

  </body>

</html>
