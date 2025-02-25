<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $invitations = Invitation::paginate();

    return view('admin.invitations.index', [
      'invitations' => $invitations,
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(Invitation $invitation)
  {
    return view('admin.invitations.show', [
      'invitation' => $invitation,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Invitation $invitation)
  {
    return view('admin.invitations.edit', [
      'invitation' => $invitation,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Invitation $invitation)
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

    $invitation->update($validated);
    session()->flash('success', 'Undangan berhasil diupdate!');

    return redirect()->route('admin.invitations.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Invitation $invitation)
  {
    $invitation->delete();
    session()->flash('success', 'Undangan berhasil dihapus!');
    return redirect()->route('admin.invitations.index');
  }
}
