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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MMGZGHT');</script>
<!-- End Google Tag Manager -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87435624-1', {
  	'storage':'none'
	});
  ga('send', 'pageview',location.pathname);


</script>



  <!--  {!! HTML::script('scripts/App/analytics.js') !!} -->
    {!! HTML::script('scripts/App/App.js') !!}
    {!! HTML::script('scripts/App/service.js') !!}

    {!! HTML::style('css/style.css')!!}

  </head>

  <body style="padding-top:60px;">


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMGZGHT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


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
