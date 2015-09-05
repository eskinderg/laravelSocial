
app.config(function ($routeProvider, $locationProvider) {

  //$locationProvider.html5Mode(true);

    $routeProvider
        .when('/Page1', {
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
        .when('/Authors', {
            templateUrl: 'Template/authors.html',
            controller: 'AuthorsController'
        })
        .when('/Authors/:id', {
            templateUrl: 'Template/authorEdit.blade.php',
            controller: 'AuthorEditController'
        })
        .when('/create', {
            templateUrl: 'Template/authornew.html',
            controller: 'CreateAuthorController'
        })
        .otherwise({
            templateUrl: 'Template/Page1.html',
            controller: 'Page1Controller'
            //redirectTo:'/Authors'
        });

    //$locationProvider.html5Mode(false).hashPrefix('!');
    //$locationProvider.html5Mode(true);

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

app.controller('AuthorEditController', function ($scope,$routeParams, $http,$location) {
    //$scope.Title = "Page3";
    $scope.id = $routeParams.id;

    $http.get('api/todo/' + $scope.id).success(function(data, status, headers, config) {

          $scope.author = data;
          //$scope.gridOptions.data = data;
          //console.log($scope.author);
    });

    $scope.btnSave = function(author)
    {

        $http.put('api/todo/'+ author.id,author).success(function(data,status,headers,config) {
            $location.path( "/Authors" );
        });
    }
});



app.controller('AuthorsController', function ($scope,$http,$location) {


    $scope.Title = "Authors";

    $scope.gridOptions = {
      enableRowSelection: true,
      enableSelectAll: true,
      selectionRowHeaderWidth: 35,
      rowHeight: 35,
      showGridFooter:true,
    };
      //$scope.loading = true;

    $http.get('api/todo').success(function(data, status, headers, config) {

          $scope.authors = data;

          $scope.gridOptions.data = data;

    });

    $scope.btnDelete = function(author,index)
    {
      $http.delete('api/todo/' + author.id).success(function(data, status, headers, config) {
           $scope.authors.splice(index, 1);
          //$location.path( "/Authors" );
        });
    };



});


app.controller('CreateAuthorController', function ($scope,$routeParams, $http,$location) {
    //$scope.Title = "Page3";
    //$scope.id = $routeParams.id;
    $scope.author = {
          name: null,
          email: null,
          bio: null
      };



    $scope.btnNew = function()
    {

        $http.post('api/todo',$scope.author).success(function(data, status, headers, config) {
          $location.path( "/Authors" );
        });

    }


});
