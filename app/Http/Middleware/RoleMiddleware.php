<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   * @param  string $role
   */
  public function handle(Request $request, Closure $next, string $role): Response
  {
    if (! Auth::check()) {
      return redirect()->route('login');
    }

    $user = Auth::user();
    return $user->role == $role ? $next($request) : abort(403);
  }
}
