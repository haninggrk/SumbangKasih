<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class protectFromDonateableUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->user_type === 2){
            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Anda sudah diterima menjadi penerima donasi Sumbang Asih!',
                'flash.bannerStyle' => 'success'
            ]);

        }
        return $next($request);
    }
}
