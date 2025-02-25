<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('contact');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255'],
      'whatsapp' => ['required', 'string', 'max:255'],
      'message' => ['required', 'string', 'max:255'],
    ]);

    Message::create($validated);
    session()->flash('success', 'Pesan berhasil dikirim!');

    return redirect()->route('contact.create');
  }
}
