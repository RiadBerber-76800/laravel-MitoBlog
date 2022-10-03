<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
 public function allUsers()
 {
  $users = User::orderBy("created_at", "DESC")->paginate(5);
  return view("pages.all-users", compact("users"));
 }

}
