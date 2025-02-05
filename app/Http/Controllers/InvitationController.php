<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $user = Auth::user();
    $invitations = Invitation::where('user_id', $user->id)->paginate();

    return view('user.invitations.index', [
      'invitations' => $invitations,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('user.invitations.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'bride_name' => ['required', 'string', 'max:255'],
      'groom_name' => ['required', 'string', 'max:255'],
      'bride_parent_name' => ['required', 'string', 'max:255'],
      'groom_parent_name' => ['required', 'string', 'max:255'],
      'date' => ['required', 'date', 'after:today'],
      'location' => ['required', 'string', 'max:255'],
      'time' => ['required', 'string', 'max:255'],
      'theme' => ['required', 'string', 'max:255'],
    ]);

    $user = Auth::user();
    $invitation = $user->invitations()->create($validated);
    session()->flash('success', 'Undangan berhasil dibuat!');

    return redirect()->route('user.invitations.success', [
      'invitation' => $invitation,
    ]);
  }

  /**
   * Show the success page.
   */
  public function success(Invitation $invitation)
  {
    $user = Auth::user();
    if ($invitation->user_id != $user->id) return abort(403);

    return view('user.invitations.success', [
      'invitation' => $invitation,
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(Invitation $invitation)
  {
    $user = Auth::user();
    if ($invitation->user_id != $user->id) return abort(403);

    return view('user.invitations.show', [
      'invitation' => $invitation,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Invitation $invitation)
  {
    $user = Auth::user();
    if ($invitation->user_id != $user->id) return abort(403);

    return view('user.invitations.edit', [
      'invitation' => $invitation,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Invitation $invitation)
  {
    $user = Auth::user();
    if ($invitation->user_id != $user->id) return abort(403);

    $validated = $request->validate([
      'bride_name' => ['required', 'string', 'max:255'],
      'groom_name' => ['required', 'string', 'max:255'],
      'bride_parent_name' => ['required', 'string', 'max:255'],
      'groom_parent_name' => ['required', 'string', 'max:255'],
      'date' => ['required', 'date', 'after:today'],
      'location' => ['required', 'string', 'max:255'],
      'time' => ['required', 'string', 'max:255'],
      'theme' => ['required', 'string', 'max:255'],
    ]);

    $invitation->update($validated);
    session()->flash('success', 'Undangan berhasil diupdate!');

    return redirect()->route('user.invitations.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Invitation $invitation)
  {
    $user = Auth::user();
    if ($invitation->user_id != $user->id) return abort(403);

    $invitation->delete();
    session()->flash('success', 'Undangan berhasil dihapus!');
    return redirect()->route('user.invitations.index');
  }
}
