
app.config(function ($routeProvider, $locationProvider) {
    $routeProvider
        .when('/public/Page1', {
            templateUrl: 'Template/Page1.html',
            controller: 'Page1Controller'
        })
        .when('/Page2', {
            templateUrl: 'Template/Page2.html',
            controller: 'Page2Controller'
        })
        .when('/Page3', {
            templateUrl: 'Template/Page3.html',
            controller: 'Page3Controller'
        })
        .otherwise({
            templateUrl: 'Template/Page1.html',
            controller: 'Page1Controller'
        });

    $locationProvider.html5Mode(false).hashPrefix('!');

});

app.controller('Page1Controller', function ($scope) {

    $scope.Title = 'Pedantic';

});

app.controller('Page2Controller', function ($scope) {
    $scope.Title = "Ostentatious";

});

app.controller('Page3Controller', function ($scope) {
    $scope.Title = "Page3";

});
