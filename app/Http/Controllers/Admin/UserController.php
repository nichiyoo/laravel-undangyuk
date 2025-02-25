<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::paginate();

    return view('admin.users.index', [
      'users' => $users,
    ]);
  }
}
