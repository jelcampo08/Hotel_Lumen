<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
/**
* 
*/
class AdminController extends Controller
{
	public function getAllAbout() {
		return response()->json(Admin::all());
	}

	public function create(Request $request){
		$about = About::create($request->all());
		return response()->json($about, 201);

	}
}