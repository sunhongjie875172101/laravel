<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //laravel中的session()函数是可读取也可以设置的session函数
        //读取session('name')
        //设置session(['uid'=>111,'uname'=>'张三'])
        if(!session('uid')){
            //跳转到登录页面
            return redirect('/login');
        }
        return $next($request);
    }
}
