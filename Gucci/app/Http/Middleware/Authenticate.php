<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('login');
    // }

    public function handle($request, Closure $next,...$guards)
    {

            if (!Auth::check()) { //chua dang nhap
                return redirect()->route('login');
            }
        $user=Auth::user(); //lay thong tin user khi da dang nhap

        //kiem tra quyen cua nguoi dung
        $route=$request->route()->getName();
            // dd($route);
         
        if($user->cant($route)){
            return redirect()->route('error',['code'=>403]);
            // return redirect('gucci.error');
        }
        return $next($request);
    }

}
