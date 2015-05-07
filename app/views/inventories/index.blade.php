@extends('inventory')

	@foreach($inventories as $inventory)
		{{ $inventory->caption }}
	@endforeach