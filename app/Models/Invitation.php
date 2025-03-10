<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
  /** @use HasFactory<\Database\Factories\InvitationFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'bride_name',
    'groom_name',
    'bride_fullname',
    'groom_fullname',
    'bride_parent',
    'groom_parent',
    'date',
    'time',
    'location',
    'address',
    'video',
    'theme',
    'bride_photo',
    'groom_photo',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'date' => 'date',
  ];

  /**
   * Relationships between the invitation and the user.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
