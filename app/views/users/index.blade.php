@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Management Users</h4>
    <p><a href="{{ URL::to('users/create') }}" class="btn btn-success" role="button">Tambah</a></p> 
  </div>
  <div class="panel-body">
    <div class="contentpanel">

    @yield('content')

          <div class="table-responsive">
          <div class="panel panel-default">
            <table class="table" id="table1">
              <thead>
                 <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                 </tr>
              </thead>
              <tbody>
              	@foreach($users as $value)
              	<tr>
              		<td>{{{ $value->ID }}}</td>
              		<td>{{{ $value->email }}}</td>
              		<td>{{{ $value->nama }}}</td>
              		<td>
              			<a href="{{ URL::to('users/edit/'.$value->id) }}"><i class="fa fa-pencil"></i></a>
              			<a href="{{ URL::to('users/destroy/'.$value->id) }}"><i class="fa fa-trash-o"></i></a>
              		</td>
              	</tr>
              	@endforeach
              </tbody>
           </table>
          </div><!-- table-responsive -->
          
        </div><!-- panel-body -->

        {{$users->links()}}

      </div><!-- panel -->
        
    </div><!-- contentpanel -->
  </div>
</div>  
@stop