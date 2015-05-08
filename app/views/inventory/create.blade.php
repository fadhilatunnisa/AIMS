@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">Add Inventory</h1>
  </div>
  <div class="panel-body">
  	{{ Form::open(array('url' => 'inventory/create')) }}

  	<div class="form-group">
  		{{ Form::label('nama', 'Nama') }}
  		{{ Form::text('nama', null, array('class' => 'form-control')) }}
  		{{ '<div>'.$errors->first('nama').'</div>' }}
  	</div>
  	<div class="form-group">
  		{{ Form::label('jumlah', 'Jumlah') }}
  		{{ Form::text('jumlah', null, array('class' => 'form-control')) }}
  		{{ '<div>'.$errors->first('jumlah').'</div>' }}
  	</div>
  	<div class="form-group">
  		{{ Form::label('kondisi', 'Kondisi') }}
  		{{ Form::select('kondisi', array('Baik' => 'baik', 'Rusak' => 'rusak', 'Hilang' => 'hilang'), null, array('class' => 'form-control')) }}
  		{{ '<div>'.$errors->first('kondisi').'</div>' }}
  	</div>
  	<div class="form-group">
  		{{ Form::label('status_kepemilikan', 'Kepemilikan') }}
  		{{ Form::select('status_kepemilikan', array('Pribadi' => 'pribadi', 'Kantor' => 'kantor', 'Pinjaman' => 'pinjaman'), null, array('class' => 'form-control')) }}
  		{{ '<div>'.$errors->first('status_kepemilikan').'</div>' }}
  	</div>
  	<div class="form-group">
  		{{ Form::label('keterangan', 'Keterangan') }}
  		{{ Form::textarea('keterangan',null, array('class' => 'form-control')) }}
  		{{ '<div>'.$errors->first('status_kepemilikan').'</div>' }}
  	</div>
  	{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}

  	{{ Form::close() }}

  </div>
 </div>

@stop