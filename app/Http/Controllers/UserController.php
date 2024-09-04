<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($name, $id)
    {
        return view('user', ['name' => $name, 'id' => $id]);
    }
}
