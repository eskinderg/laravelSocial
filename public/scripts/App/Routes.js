
app.config(function ($routeProvider, $locationProvider) {
  //$locationProvider.html5Mode(true);
    $routeProvider
        .when('/Page1', {
            templateUrl: 'scripts/App/Views/Pages/Page1.html',
            controller: 'Page1Controller'
        })
        .when('/Page2', {
            templateUrl: 'scripts/App/Views/Pages/Page2.html',
            controller: 'Page2Controller'
        })
        .when('/Page3', {
            templateUrl: 'scripts/App/Views/Pages/Page3.html',
            controller: 'Page3Controller'
        })
        .when('/Authors', {
            templateUrl: 'scripts/App/Views/Author/authors.html',
            controller: 'AuthorsController'
        })
        .when('/Authors/:id', {
            templateUrl: 'scripts/App/Views/Author/authorEdit.blade.php',
            controller: 'AuthorEditController'
        })
        .when('/create', {
            templateUrl: 'scripts/App/Views/Author/authornew.html',
            controller: 'CreateAuthorController'
        })
        .otherwise({
            templateUrl: 'scripts/App/Views/Pages/Page1.html',
            controller: 'Page1Controller'
            //redirectTo:'/Authors'
        });

    //$locationProvider.html5Mode(false).hashPrefix('!');
    //$locationProvider.html5Mode(true);

});
