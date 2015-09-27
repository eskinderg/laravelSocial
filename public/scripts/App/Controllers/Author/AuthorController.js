app.controller('AuthorsController', function ($scope,$http,$location) {

    $scope.Title = "Authors";

    $scope.gridOptions = {
      enableRowSelection: true,
      enableSelectAll: true,
      selectionRowHeaderWidth: 35,
      rowHeight: 35,
      showGridFooter:true,
    };




      $scope.loading = {'display': 'block'}; // then button will visible.
      $scope.display = {'display': 'none'}; // then button will visible.
      //$scope.loading = true;

    $http.get('api/authors').success(function(data, status, headers, config) {
          $scope.authors = data;
          $scope.gridOptions.data = data;
    }).finally(function() {
          // called no matter success or failure
          $scope.loading = {'display': 'none'}; // then button will hidden.
          $scope.display = {'display': 'block'}; // then button will visible.
          //$scope.loading = false;
  });



    $scope.btnDelete = function(author,index)
    {
      $http.delete('api/authors/' + author.id).success(function(data, status, headers, config) {
           $scope.authors.splice(index, 1);
          //$location.path( "/Authors" );
        });
    };

});
