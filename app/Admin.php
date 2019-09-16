<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table = 'users';

	// viet 1 ham lay all data tu bang users
	public function getAllDataUsers()
	{
		$data = Admin::all();
		return $data;
	}

	public function loginAdminUser($user, $pass)
	{
		$data = Admin::select('*')
					->where('username', $user)
					->where('password', $pass)
					->where('status', 1)
					->first();
		return $data;

		// "SELECT * FROM users WHERE username = '$user' AND password = '$pass' AND status = 1 LIMIT 1";
	}







}