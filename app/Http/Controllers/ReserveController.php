<?php

namespace App\Http\Controllers;
use App\Models\Reserve;
use Illuminate\Http\Request;
/**
* 
*/
class ReserveController extends Controller
{
	public function getAllReserve() {
		return response()->json(Reserve::all());
	}

	public function create(Request $request){
		$reserve = Reserve::create($request->all());
		return response()->json($reserve, 201);

	}
	public function getOneReserve($id) {
		return response()->json(Reserve::find($id));
	}
	public function updateReserve($id, Request $request){
		$update = Reserve::findorFail($id);
		$update -> update($request->all());
		return response()->json($update, 200);
	}

	public function delete($id) {
		Reserve::findorFail($id)->delete();
		return response('Deleted Successfully', 200);
	}
}