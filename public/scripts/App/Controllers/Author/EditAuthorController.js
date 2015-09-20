app.controller('AuthorEditController', function ($scope,$routeParams, $http,$location) {
    //$scope.Title = "Page3";
    $scope.id = $routeParams.id;

    $http.get('api/authors/' + $scope.id).success(function(data, status, headers, config) {
          $scope.author = data; //$scope.gridOptions.data = data;  //console.log($scope.author);
    });

    $scope.btnSave = function(author)
    {

        $http.put('api/authors/'+ author.id,author).success(function(data,status,headers,config) {
            $location.path( "/Authors" );
        });
    }
});
