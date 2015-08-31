@extends('admin.layout.master')



@section('content')

    Admin Home Page

    <div ng-controller="dashboardController">
        <div ui-grid="gridOptions" ui-grid-selection class="grid"></div>
    </div>


@endsection
