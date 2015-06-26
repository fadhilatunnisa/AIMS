@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">Add Inventory</h1>
  </div>
  <div class="panel-body">
 
        {{ Form::open(array('url' => 'users/create')) }}
             
            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, array('class' => 'form-control')) }}
                {{ '<div>'.$errors->first('email').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::text('password', null, array('class' => 'form-control')) }}
                {{ '<div>'.$errors->first('password').'</div>' }}
            </div>
 
            <div class="form-group">
                {{ Form::label('nama', 'Nama') }}
                {{ Form::text('nama', null, array('class' => 'form-control')) }}  
            </div>
            {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
 
        {{ Form::close() }}
  </div>
 </div>

@stop