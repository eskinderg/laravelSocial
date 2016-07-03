
var app = angular.module('todoApp', ['ngRoute','ui.grid','ui.grid.selection','ngDialog'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});


app.config(['ngDialogProvider', function (ngDialogProvider) {
    ngDialogProvider.setDefaults({
        className: 'ngdialog-theme-default',
        plain: false,
        showClose: true,
        closeByDocument: true,
        closeByEscape: true,
        appendTo: false,
        // disableAnimation: true,
        preCloseCallback: function () {
            console.log('default pre-close callback');
        }
    });
}]);


/*app.controller('todoController', function($scope, $http) {


	$scope.todos = [];
	$scope.loading = false;

	$scope.currentAuthor = null;


	$scope.gridOptions = {
		enableRowSelection: true,
		enableSelectAll: true,
		selectionRowHeaderWidth: 35,
		rowHeight: 35,
		showGridFooter:true,
	};



	$scope.init = function() {

		$scope.loading = true;

		$http.get('api/authors').
		success(function(data, status, headers, config) {

			$scope.todos = data;
			$scope.authors = data;

				$scope.loading = false;
			$scope.gridOptions.data = data;

		});
	}

	$scope.addTodo = function() {
				$scope.loading = true;

		$http.post('/api/todo', {
			title: $scope.todo.title,
			done: $scope.todo.done
		}).success(function(data, status, headers, config) {
			$scope.todos.push(data);
			$scope.todo = '';
				$scope.loading = false;

		});
	};

	$scope.updateTodo = function(todo) {
		$scope.loading = true;

		$http.put('/api/todos/' + todo.id, {
			title: todo.title,
			done: todo.done
		}).success(function(data, status, headers, config) {
			todo = data;
				$scope.loading = false;

		});;
	};

	$scope.btnclicked = function(author)
	{
		//alert(author.name);
		$scope.currentAuthor = author;
	}


	$scope.btnload = function()
	{
		 $scope.init();
	}


	$scope.deleteTodo = function(index) {
		$scope.loading = true;

		var todo = $scope.todos[index];

		$http.delete('/api/todo/' + todo.id)
			.success(function() {
				$scope.todos.splice(index, 1);
					$scope.loading = false;

			});;
	};


	$scope.init();

});*/
