<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->age        = $request->age;
        $user->about      = $request->about;

        $user->save();
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->age        = $request->age;
        $user->about      = $request->about;

        $user->save();
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();
    }
}
