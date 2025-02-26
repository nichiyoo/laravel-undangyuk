<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'role',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var list<string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  /**
   * Scope a query to only include users that have the given role.
   *
   * @param  \Illuminate\Database\Eloquent\Builder  $query
   * @param  string  $role
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function scopeHasRole(Builder $query, string $role): Builder
  {
    return $query->where('role', $role);
  }

  /**
   * Relationships between the user and the invitation.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function invitations(): \Illuminate\Database\Eloquent\Relations\HasMany
  {
    return $this->hasMany(Invitation::class);
  }
}
