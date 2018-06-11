<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getAa(){
        echo "这是我的第2个控制器测试";
    }

    //参数
    public function getUpdate($id){
        echo "这里是修改，修改id是：".$id;
    }

    //add
    public function getAdd($id){
        echo "这里是增加，增加的id是：".$id;
    }

    //多参
    public function getDelete($type,$id){
        echo "这里是删除，删除的类型是".$type.".删除的id是：".$id;
    }

    //别名
    public function getBieming($id){
        //获取完整的路径
        //echo route('user',['id'=>$id]);
        echo "这里是别名演示".$id;
    }

    //显示表单
    public function getShow(){
        return view('useradd');
    }

    //处理用户提交
    public function postDd(){
        print_r($_POST);
    }

    //rquest对象中的方法
    public function getRequest(Request $request){//Request $rquest映射
        //信息获取
        echo "用户请求的方法：".$request->method().'<br>';
        echo "用户检测方法：".$request->isMethod('get').'<br>';
        echo "用户请求路径：".$request->path().'<br>';
        echo "用户完整的URL：".$request->url().'<br>';
        echo "用户的IP：".$request->ip().'<br>';
        echo "用户的端口：".$request->getport().'<br>';
        //提取参数
        //设置默认值
        //$jie = $request->input('vip',10);

        //检测请求参数
        //$jie = $request->has('username');

        //获取所有的请求参数
        //$jie = $request->all();
        
        //获取其中一部分参数
        //$jie = $request->only(['username','password']);

        //剔除不需要的参数
        //$jie = $request->except(['username','password']);

        //获取请求头信息
        //$jie = $request->header('Connection');
        $jie = $request->header('Cache-Control');
        var_dump($jie);
    }
}
