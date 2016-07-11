app.controller('AuthorEditController', function ($scope,$routeParams, $http,$location, Service) {
    //$scope.Title = "Page3";
    $scope.id = $routeParams.id;

    $scope.loading = {'display': 'block'}; // then button will visible.
    $scope.display = {'display': 'none'}; // then button will visible.

    $http.get('api/authors/' + $scope.id).success(function(data, status, headers, config) {
          $scope.author = data; //$scope.gridOptions.data = data;  //console.log($scope.author);
    }).finally(function() {
          // called no matter success or failure
          $scope.loading = {'display': 'none'}; // then button will hidden.
          $scope.display = {'display': 'block'};
          //$scope.loading = false;
  });

    $scope.btnSave = function(author)
    {

        Service.updateAuthor(author).then(function (result) {
            $location.path( "/Authors" );
        });
/*
        $http.put('api/authors/'+ author.id,author).success(function(data,status,headers,config) {
            $location.path( "/Authors" );
        });
*/
      }
});
