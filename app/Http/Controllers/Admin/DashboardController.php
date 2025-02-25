<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lib\Helper;
use App\Models\Invitation;
use App\Models\Message;
use App\Models\User;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $counts = array_map(
      function ($item) {
        return Helper::to_object($item);
      },
      [
        [
          'route' => route('admin.users.index'),
          'name' => 'Pengguna',
          'count' => User::count(),
          'unit' => 'data',
        ],
        [
          'route' => route('admin.messages.index'),
          'name' => 'Pesan',
          'count' => Message::count(),
          'unit' => 'data',
        ],
        [
          'route' => route('admin.invitations.index'),
          'name' => 'Pesanan Undangan',
          'count' => Invitation::count(),
          'unit' => 'data',
        ],
      ],
    );

    return view('admin.dashboard', [
      'counts' => $counts,
      'messages' => Message::latest()->take(5)->get(),
      'latest_invitation' => Invitation::latest()->take(5)->get(),
    ]);
  }
}
