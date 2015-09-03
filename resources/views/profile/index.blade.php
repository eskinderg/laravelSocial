@extends('layout.master')

@section('content')

    {!! Form::model($user,['class'=>'form-horizontal','route'=>['profile.update',$user->id]]) !!}


          <div class="form-group">
            {!! Form::label('firstname','First Name:',array('class'=>'col-md-4 control-label')) !!}
            <div class="col-md-6">
              {!! Form::text('firstname',null,array('class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
            {!! Form::label('lastname','Last Name:',array('class'=>'col-md-4 control-label')) !!}
            <div class="col-md-6">
              {!! Form::text('lastname',null,array('class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
            {!! Form::label('email','EMail:',array('class'=>'col-md-4 control-label')) !!}
            <div class="col-md-6">
              {!! Form::text('email',null,array('class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
            {!! Form::label('bio','Biography:',array('class'=>'col-md-4 control-label')) !!}
            <div class="col-md-6">
              {!! Form::text('bio',null,array('class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
            {!! Form::label('address','Address:',array('class'=>'col-md-4 control-label')) !!}
            <div class="col-md-6">
              {!! Form::text('address',null,array('class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6" style="text-align:right;">
              {!! Form::submit('Update',array('class'=>'btn btn-default')) !!}
            </div>
          </div>


    {!! Form::close() !!}

@endsection
