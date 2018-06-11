<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        //记录请求的路径
        $path = $request -> path();
        //带时间的详细记录
        $str = "[".date("Y-m-d H:i:s")."------当前页面路径：".$path."]";
        file_put_contents('request.log',$str."\r\n",FILE_APPEND);
        return $next($request);
    }
}
