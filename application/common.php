<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
if(!function_exists('encrypt_password')){
    function encrypt_password($pwd){
        $salt='dasadjfh9u8jdfakf';
        return md5(md5($pwd).$salt);
    }
}
if(!function_exists('get_tree')){
    function get_tree($arr,$pid=0,$level=0){
        static $tree=array();
        foreach($arr as $v){
            if($v['pid']==$pid){
                $v['level'] = $level;
                $tree[] = $v;
                get_tree($arr, $v['id'], $level + 1);
            }
        }
        return $tree;
    }
}
if(!function_exists('get_cate_tree')){
    function get_cate_tree($list,$pid=0){
        static $tree=array();
        foreach($list as $v){
            if($v['pid']==$pid){
                $v['son']=get_cate_tree($list,$v['id']);
                $tree[]=$v;
            }
        }
        return $tree;
    }   
}
if (!function_exists('encrypt_phone')) {
    function encrypt_phone($phone)
    {
        return substr($phone, 0, 3) . "****" . substr($phone, 7);
    }
}
if(!function_exists('juhecurl')){
    function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }
}
if(!function_exists('sendmsg')){
    function sendmsg($phone,$msg){
        $sendUrl = 'http://v.juhe.cn/sms/send'; //短信接口的URL
  
        $smsConf = array(
            'key'   => 'c8786549f06a0ae2ccb2e0381e58b9b8', //您申请的APPKEY
            'mobile'    => $phone, //接受短信的用户手机号码
            'tpl_id'    => '153633', //您申请的短信模板ID，根据实际情况修改
            'tpl_value' =>"#code#=$msg" //您设置的模板变量，根据实际情况修改
        );
        $content = juhecurl($sendUrl,$smsConf,1); //请求发送短信
 
        if($content){
            $result = json_decode($content,true);
            $error_code = $result['error_code'];
            if($error_code == 0){
                //状态为0，说明短信发送成功
                return true;
            }else{
                //状态非0，说明失败
               return false;
            }
        }else{
            //返回内容异常，以下可根据业务逻辑自行修改
            echo "请求发送短信失败";
        }

    }
}
if(!function_exists('login')){
    function login(){
        if(request()->isGet()){
            return view();
        }else if(request()->isPost()){
            $data=request()->param();
            $phone=$data['phone'];
            $ma=mt_rand(1000,9999);
            if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
                $res = [
                    'code' => 10001,
                    'msg' => '手机号格式错误',
                ];
                return json($res);
            }
            $register_time = cache($phone.'time') ? : 0;
            if (time() - $register_time < 3) {
                $res = [
                    'code' => 10003,
                    'msg' => '发送太频繁，稍后再试',
                ];
                return json($res);
            }
            
            // $result=$this->sendmsg($phone,$ma);
            $result=true;
            if($result){
                cache($phone,$ma,300);
                cache($phone.'time',time());
                $res=[
                    'code' => 100,
                    'msg' => $ma
                ];
                return json($res);
            }else{
                $res=[
                    'code' => 200,
                    'msg' => '发送失败'
                ];
                return json($res);
            }
        }
    }
}
if(!function_exists('sc_send')){
    function sc_send(  $text , $desp = '' , $key = 'SCU56000Tccc7b8c1ea109916f9dd5df3d16c32345d380a713f54b'  )
    {
        $postdata = http_build_query(
        array(
            'text' => $text,
            'desp' => $desp
        )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
    $context  = stream_context_create($opts);
    return $result = file_get_contents('https://sc.ftqq.com/'.$key.'.send', false, $context);

    }
}