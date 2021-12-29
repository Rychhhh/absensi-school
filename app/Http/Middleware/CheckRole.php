<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika akun  login sesuai role
        // maka silahkan akses
        // jika tidak sesuai maka diarahkan ke halaman home

        // $roles = array_slice(func_get_args(), 2);

        // foreach ($roles as $role) { 
        //  $user = Auth::user()->role == 'admin';
        //  if( $user == $role){
        //      return $next($request);
        // }
        // }

        //  return redirect('/');

        if(!Auth::check()) {
            return redirect('login');
        } elseif(Auth::check() && Auth::user()->role != 'admin') {
            return response()->view('Presensi.Seleksi');
        } elseif(Auth::user()->role == 'admin'){
            return $next($request);
        } else {
            abort(403);
        }
    }
}
