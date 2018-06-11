<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//路由组
//use App\Entity\Users;

Route::group(['shangcheng'],function(){
    Route::get('/', function(){
        //return Users::all();
        return view('welcome');
    });
    Route::get('/nanzhuang',function(){
        echo "这里是男装区";
    });
    Route::get('/nvzhuang',function(){
        echo "这里是女装区";
    });
});
Route::get('/a',function(){
    echo "这是第一个测试";
});
Route::get('/form',function(){
    return view('form');
});
Route::post('/insert',function(){
    print_r($_POST);
});
Route::get('put',function(){
    return view('put');
});
Route::put('/insert',function(){
    print_r($_POST);
});

//有参路由
Route::get('/article/{id}',function($id){
    echo "编号：".$id."文章详情";
})->where('id','^[1-9]\d*$');

//where('id','^[1-9]\d*$')参数限制，第一个参数：判断参数。参数2：正则表达式
//多参路由
Route::get('/shop/{type}-{id}',function($type,$id){
    echo "当前类型：".$type.",id为".$id;
})->where('id','^[1-9]\d*$');
Route::get('/caizheng/{type}-{sex}-{id}',function($type,$sex,$id){
    echo "信息为：".$type."性别为：".$sex."id为：".$id;
});

//路由别名
Route::get('/admin/user',[
    'as' => 'alist',
    'uses' => function(){
        echo "您当前的位置是：". route ('alist');
}]);

//404页面
Route::get('/404',function(){
    echo abort(404);
});

//登录页面
Route::get('/login',function(){
    echo "这里是登录页面";
});

//给shezhi路由设置中间件
Route::get('shezhi',function(){
    echo "这里是后台设置页面";
})->middleware('login');

//强制设置session
Route::get('/session',function(){
    session(['uid'=>110]);
});

//给ceshi页面设置中间件
Route::get('/ceshi',function(){
    echo "这里是一个后台测试页面";
})->middleware('logins');

//控制器
Route::get('/add','LoginControler@aa');

//控制器带参数ID
Route::get('/user/{id}','LoginControler@update')->where('id','^[1-9]\d*$');

//控制器多参
Route::get('/admin/{type}-{id}','LoginControler@delete');

//控制器别名
Route::get('/admin/user/{id}',[
    'as' => 'user',
    'uses' => 'LoginControler@bieming'    
]);


//控制器中间件---数组法
/*Route::get('/user/shengji', [
    'middleware' => 'login',
    'uses' => 'LoginControler@shengji'
]);*/
//控制器中间件---连贯法
Route::get('/user/shengji','LoginControler@shengji')->middleware('login'); 

//隐式控制器
Route::controller('admin','AdminController');



