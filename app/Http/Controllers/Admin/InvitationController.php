<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvitationController extends Controller
{
  protected $rules = [
    'bride_name' => ['required', 'string', 'max:255'],
    'groom_name' => ['required', 'string', 'max:255'],
    'bride_fullname' => ['required', 'string', 'max:255'],
    'groom_fullname' => ['required', 'string', 'max:255'],
    'bride_parent' => ['required', 'string', 'max:255'],
    'groom_parent' => ['required', 'string', 'max:255'],
    'date' => ['required', 'date', 'after:today'],
    'time' => ['required', 'string', 'max:255'],
    'location' => ['required', 'string', 'max:255'],
    'address' => ['required', 'string', 'max:255'],
    'theme' => ['required', 'string', 'max:255'],
    'video' => ['required', 'url'],
    'bride_photo' => ['required', 'image'],
    'groom_photo' => ['required', 'image'],
  ];


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
  public function show(Invitation $invitation, Request $request)
  {
    $recipient = $request->get('to');
    $theme = $invitation->theme;

    return view('templates.' . $theme, [
      'invitation' => $invitation,
      'recipient' => $recipient ?? 'Handoyo With Partner',
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
    Storage::disk('public')->delete($invitation->groom_photo);
    Storage::disk('public')->delete($invitation->bride_photo);

    $validated = $request->validate($this->rules);
    $files = [
      'bride_photo' => $request->file('bride_photo'),
      'groom_photo' => $request->file('groom_photo'),
    ];

    foreach ($files as $key => $file) {
      if ($file) {
        $filename = $key . '-' . time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->put($filename, $file->get());
        $validated[$key] = $filename;
      }
    }

    $invitation->update($validated);
    session()->flash('success', 'Undangan berhasil diupdate!');

    return redirect()->route('admin.invitations.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Invitation $invitation)
  {
    Storage::disk('public')->delete($invitation->groom_photo);
    Storage::disk('public')->delete($invitation->bride_photo);

    $invitation->delete();
    session()->flash('success', 'Undangan berhasil dihapus!');

    return redirect()->route('admin.invitations.index');
  }
}
