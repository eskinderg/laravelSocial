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

        $http.post('api/authors',$scope.author).success(function(data, status, headers, config) {
          $location.path( "/Authors" );
        });

    }


});
