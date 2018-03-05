<?php

namespace App\Http\Middleware;


use Closure;
use Auth;

class CheckLevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()&&Auth::user()->level==1){
            // Nếu đã chứng thực và level ==1 (là admin)
            return $next($request);
        }else{
            return redirect('loi');
            // Nếu không phải chuyển hướng về trang chủ
        }
    }
}
