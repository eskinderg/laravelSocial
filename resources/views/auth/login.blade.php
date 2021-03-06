@extends('layout.master')

@section('title','login')

@section('content')



  <div class="container-fluid">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> &nbsp;
                    Login
                  </div>
                  <div class="panel-body">
                      @if (count($errors) > 0)
                          <div class="alert alert-danger">
                              <strong>Whoops!</strong> There were some problems with your input.<br><br>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif

                      <form class="form-horizontal" role="form" method="POST" action="login">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                          <div class="form-group">
                              <label class="col-md-4 control-label">Email</label>
                              <div class="col-md-6">
                                  <input type="email" class="form-control" esk-focus name="email" value="{{ old('email') }}">
                              </div>
                          </div>



                          <div class="form-group">
                              <label class="col-md-4 control-label">Password</label>
                              <div class="col-md-6">
                                  <input type="password" class="form-control" name="password">
                              </div>
                          </div>


                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Login
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>



@endsection
