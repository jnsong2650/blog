<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    private $access_token;    //定义一个access_token，用于后续调用微信接口（此篇用不到）

    //微信服务器地址
    public function wechatDefault()
    {
        //构造函数
        public function __construct(){}

        define("TOKEN", "peng");    //定义TOKEN, “peng”是自己随便定义，这一句很重要！！！
        $wechatObj = new wechatCallbackapiTest();
        if (!isset($_GET['echostr'])) {
            $wechatObj->LogicAction();    //后续的有实质功能的function(此篇不用管）
        }else{
            $wechatObj->valid();    //调用valid函数进行基本配置
        }






        public function valid(){    //用于基本配置的函数
            $echoStr = $_GET["echostr"];

            if($this->checkSignature()){
                echo $echoStr;
                exit;
            }
        }


    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }


    public function LogicAction()
    {

    }


}
