<?php

class InventoriesController extends BaseController {

	protected $layout = 'Inventory';

	/**
	 * Display a listing of the resource.
	 * GET /inventories
	 *
	 * @return Response
	 */
	public function index()
	{
		$inventories = Inventory::all();

		$this->layout->content = View::make('inventories.index', compact('inventories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /inventories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /inventories
	 *
	 *  @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /inventories/{id}
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
	 * GET /inventories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /inventories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /inventories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}