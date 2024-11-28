<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a profile of a given user.
     * */

     public function show(string $id): View
     {
         return view('user.profile', [
             'user' => User::findOrFail($id)
         ]);
     }

     public function index(): View
     {
         return view('user.index', [
             'users' => User::all()
         ]);
     }
}
