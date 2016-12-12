<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $appId = 'wx9bb5b19486ee58df';
    public function __construct() {
        /*$this->appId = $request->get('appId');
        $this->appSecret = $request->get('appSecret');*/

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $echoStr = $_GET["echostr"];
//        $signature = $_GET["signature"];
//        $timestamp = $_GET["timestamp"];
//        $nonce = $_GET["nonce"];
//        $token = "wqer";
//        $tmpArr = array($token, $timestamp, $nonce);
//        sort($tmpArr, SORT_STRING);
//        $tmpStr = implode($tmpArr);
//        $tmpStr = sha1($tmpStr);
//        if ($tmpStr == $signature) {
//            echo $echoStr;
//            exit;
//        }
        redirect("https://open.weixin.qq.com/connect/oauth2/authorize?appid=$this->appId&redirect_uri=http://www.baidu.com&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect");
    }
}
