<?php

class InventoryController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$inventories = DB::table('inventories')->paginate(10);
		$inventories = 
		[
			'inventories' => $inventories
		];

		return View::make('Inventory.index', $inventories);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inventory.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
				'nama' => 'required',
				'jumlah' => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {   
            return Redirect::to('inventory/create')->withErrors($validator)->withInput();
      } else { 
      	DB::table('inventories')->insert(
      array(
                  'Nama' => Input::get('nama'),
                  'Jumlah' => Input::get('jumlah'),
                  'Kondisi' => Input::get('kondisi'),
                  'Status_Kepemilikan' => Input::get('status_kepemilikan'),
                  'Keterangan' => Input::get('keterangan')
            )
            );
 
      Session::flash('message', 'Data Berhasil Ditambahkan');
      return Redirect::to('inventory');
      }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$inventoriesbyid = DB::table('inventories')->where('id', $id)->first();
		$inventoriesbyid =
		[
			'inventoriesbyid' => $inventoriesbyid
		];

		return View::make('inventory.edit', $inventoriesbyid);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
				'nama' => 'required',
				'jumlah' => 'required',
			);
		 $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('inventory/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('inventories')
      ->where('id', $id)
      ->update(array(
                  'Nama' => Input::get('nama'),
                  'Jumlah' => Input::get('jumlah'),
                  'Kondisi' => Input::get('kondisi'),
                  'Status_Kepemilikan' => Input::get('status_kepemilikan'),
                  'Keterangan' => Input::get('keterangan')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('inventory');
      }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::table('inventories')->where('id', '=', $id)->delete();
		Session::flash('message', 'Data Berhasil Dihapus');
		return Redirect::to('inventory');
	}


}
