<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $messages = Message::paginate(10);

    return view('admin.messages.index', [
      'messages' => $messages
    ]);
  }

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

  /**
   * Display the specified resource.
   */
  public function show(Message $message)
  {
    return view('admin.messages.show', [
      'message' => $message,
    ]);
  }


  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Message $message)
  {
    $message->delete();
    session()->flash('success', 'Pesan berhasil dihapus!');
    return redirect()->route('admin.messages.index');
  }
}
