<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return redirect()->route('user.invitations.index');
  }
}
