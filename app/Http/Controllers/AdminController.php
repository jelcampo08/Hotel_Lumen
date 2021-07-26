<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
/**
* 
*/
class AdminController extends Controller
{
	public function getAllAdmin() {
		return response()->json(Admin::all());
	}

	public function create(Request $request){
		$admin = Admin::create($request->all());
		return response()->json($admin, 201);

	}
}