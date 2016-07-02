@extends('admin.layout.master')

@section('content')

    <h1>Admin Home Page</h1>

    <div ng-controller="dashboardController">
        <div ui-grid="gridOptions" ui-grid-selection class="grid"></div>
    </div>

@endsection
