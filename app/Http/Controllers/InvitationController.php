<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    return redirect()->route('user.invitations.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Invitation $invitation)
  {
    $user = Auth::user();
    if ($invitation->user_id != $user->id) return abort(403);

    Storage::disk('public')->delete($invitation->groom_photo);
    Storage::disk('public')->delete($invitation->bride_photo);

    $invitation->delete();
    session()->flash('success', 'Undangan berhasil dihapus!');

    return redirect()->route('user.invitations.index');
  }
}
