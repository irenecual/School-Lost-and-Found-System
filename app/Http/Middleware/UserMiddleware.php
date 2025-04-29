<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\role; // ✅ Add this line
use App\Http\Controllers\User\UserController;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
            $role = role::where('id', auth()->user()->role_id)->first();

            if ($role && $role->id == 2) {
                return $next($request);
            }
        }

        return redirect(url('/'));
    }
}
