<?php
/**
 *『CMS自动采集助手』全网在线资源采集插件
 * 官方网站     www.zidongcaiji.com
 * QQ群        856758467
 */
header("Content-Type:image/jpeg");
@$picurl = $_GET['tu'];
echo getnepianImg($picurl);
function getnepianImg($url){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $data=curl_exec($ch);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, '20');
    return $data;
    curl_close($ch);
}
