<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// nap model vao controller
use App\Admin;

class UserController extends Controller
{
	public function index(Admin $admin)
	{
		$users = $admin->getAllDataUsers();
		// tra ve kieu json
		return response()->json($users);
	}

	public function login(Admin $admin, Request $request)
	{
		// lay param tu nguoi dung gui len
		$username = $request->user;
		$password = $request->pass;

		$test = true;

		if($test == 1) {
			return 'OK';
		} else {
			return 'ERR';
		}

		$a = 10;
		$b = '20';
		$c = $a + $b;

		$data = $admin->loginAdminUser($username, $password);
		if($data == true){
			return response()->json([
				'status_code' => 200,
				'message' => 'successful'
			]);
		} else {
			return response()->json([
				'status_code' => 500,
				'message' => 'fail'
			]);
		}
	}
}