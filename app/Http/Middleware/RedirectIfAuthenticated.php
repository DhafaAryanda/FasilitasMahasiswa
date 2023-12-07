<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }

            if (Auth::guard($guard)->check()) {
                // Jika pengguna sudah login, periksa peran dan arahkan ke dashboard yang sesuai
                $user = Auth::user();
    
                if ($user->hasRole('admin')) {
                    return redirect()->route('admin.dashboard');
                } elseif ($user->hasRole('operator')) {
                    return redirect()->route('operator.dashboard'); // Sesuaikan dengan nama route untuk operator
                } elseif ($user->hasRole('mahasiswa')) {
                    return redirect()->route('mahasiswa.dashboard'); // Sesuaikan dengan nama route untuk mahasiswa
                } elseif ($user->hasRole('umum')) {
                    return redirect()->route('member.dashboard'); // Sesuaikan dengan nama route untuk umum
                }
            }
    
        }

        return $next($request);
    }
}
