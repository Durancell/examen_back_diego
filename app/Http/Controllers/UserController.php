<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsersWithDomicilio()
    {
        $users = User::with('domicilio')->get();

        return response()->json($users->transform(function($user) {
            $userArray = $user->toArray();
            $userArray['edad'] = now()->diffInYears($user->fecha_nacimiento);
            return $userArray;
        }));
    }
}
