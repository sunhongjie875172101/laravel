<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginControler extends Controller
{
    public function aa(){
        echo "这是我的第一个控制器测试";
    }

    //参数
    public function update($id){
        echo "这里是修改，修改id是：".$id;
    }

    //add
    public function add($id){
        echo "这里是增加，增加的id是：".$id;
    }

    //多参
    public function delete($type,$id){
        echo "这里是删除，删除的类型是".$type.".删除的id是：".$id;
    }

    //别名
    public function bieming($id){
        //获取完整的路径
        echo route('user',['id'=>$id]);
        echo "这里是别名演示".$id;
    }

    //中间件
    public function shengji(){
        echo "这里是用户的升级";
    }
}
