<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResourceCollection;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::paginate(10);

    	return new UserResourceCollection($users);
    }
}
