@extends('layout.master')

@section('content')


    {!! Form::model($user,array('class'=>'form-horizontal'))!!}


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


    {!! Form::close() !!}

@endsection
