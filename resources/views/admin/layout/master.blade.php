<!DOCTYPE HTML>

<html lang="eng"  ng-app="todoApp">

  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/angular-ui/bower-ui-grid/master/ui-grid.min.css">

    {!! HTML::script('scripts/app.js') !!}
    {!! HTML::style('css/style.css')!!}

    {!! HTML::script('scripts/admin/dashboard.js') !!}


  </head>

  <body>

    <header> @include('admin.layout.header') </header>

    <div class='container'>
      @yield('content')
    </div>


  </body>

</html>
