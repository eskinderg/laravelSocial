app.controller('AuthorsController', function($scope, $http, $location, ngDialog, Service, $controller) {

    $scope.Title = "Authors";

    $scope.gridOptions = {
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
        rowHeight: 35,
        showGridFooter: true,
    };

    $scope.loading = {
        'display': 'block'
    }; // then button will visible.
    $scope.display = {
        'display': 'none'
    }; // then button will visible.
    //$scope.loading = true;

    Service.getAllAuthors().then(function (result) {
        $scope.authors = result;
        $scope.gridOptions.data = result;
    });

        // called no matter success or failure
        $scope.loading = {
            'display': 'none'
        }; // then button will hidden.
        $scope.display = {
            'display': 'block'
        }; // then button will visible.
        //$scope.loading = false;


    $scope.btnDelete = function(author, index) {
        $http.delete('api/authors/' + author.id).success(function(data, status, headers, config) {
            $scope.authors.splice(index, 1);
            //$location.path( "/Authors" );
        });
    };
    $scope.btnEdit = function(author, index, event) {

        $scope.author = author;

        ngDialog.open({
            template        : 'views/author/edit.html',
            className       : 'ngdialog-theme-default',
            disableAnimation: true,
            controller      : 'AuthorEditDialogController',
            data            : angular.toJson($scope.author),
            disableAnimation: false,
        });

        event.preventDefault();
    }

});


app.controller('AuthorEditDialogController',function($scope,Service,$location){
    $scope.btnsave = function(author)
    {
      Service.updateAuthor(author).then(function (result) {
          //$location.path( "/Authors" );
          window.location.reload();
      });
    }
});
