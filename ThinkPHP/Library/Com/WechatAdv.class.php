<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi.cn@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Com;

class WechatAdv
{
    var $appid = "";
    var $appsecret = "";

    //构造函数，获取Access Token
    public function __construct($appid = NULL, $appsecret = NULL)
    {
        if ($appid) {
            $this->appid = $appid;
        }
        if ($appsecret) {
            $this->appsecret = $appsecret;
        }
        $this->lasttime = 1395049256;
        $this->access_token = "7fFpz4Z6XGKzVnA09Lpv_XHE4w-qv0_8BbFClya1NHPBQLy8980a0eeanqvZXSPrcFYUSNRb-zij_4bt76Jxl7QFIUdKxs6aumbHEpYFSg4";
        if (time() > ($this->lasttime + 7200)) {
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $this->appid . "&secret=" . $this->appsecret;
            $res = $this->https_request($url);
            $result = json_decode($res, true);

            $this->access_token = $result["access_token"];
            $this->lasttime = time();
        }
    }

    //获取用户基本信息
    public function get_user_info($openid)
    {
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=" . $this->access_token . "&openid=" . $openid . "&lang=zh_CN";
        $res = $this->https_request($url);
        return json_decode($res, true);
    }

    //https请求
    public function https_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }
}
