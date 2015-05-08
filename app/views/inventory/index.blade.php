@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">List Inventory</h1>
    <p><a href="{{ URL::to('inventory/create') }}" class="btn btn-success" role="button">Tambah</a></p> 
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
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Kepemilikan</th>
                    <th>Aksi</th>
                 </tr>
              </thead>
              <tbody>
              	@foreach($inventories as $value)
              	<tr>
              		<td>{{{ $value->id }}}</td>
              		<td>{{{ $value->nama }}}</td>
              		<td>{{{ $value->jumlah }}}</td>
              		<td>{{{ $value->kondisi }}}</td>
              		<td>{{{ $value->status_kepemilikan }}}</td>
              		<td>
              			<a href="{{ URL::to('inventory/edit/'.$value->id) }}"><i class="fa fa-pencil"></i></a>
              			<a href="{{ URL::to('inventory/destroy/'.$value->id) }}"><i class="fa fa-trash-o"></i></a>
              		</td>
              	</tr>
              	@endforeach
              </tbody>
           </table>
          </div><!-- table-responsive -->
          
        </div><!-- panel-body -->

        {{$inventories->links()}}

      </div><!-- panel -->
        
    </div><!-- contentpanel -->
  </div>
</div> 

@stop