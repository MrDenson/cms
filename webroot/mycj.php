<?php
if(empty($_GET['list'])){
	$list = 'admin.php';
}else{
	$list = $_GET['list'];
}
?>
<!--
Ho~　★★★★★★
　　○★★★★★★★○  
　　★★　　　 　★★  
　★★　∩　　∩　 ★★  
　★★　　　●　 　★★  
　★★　　　　　　★★  
　　★★　　　　★★  
　　　　★★★★　　　◢◤  
　　╭　〡〡〡〡　╮╱  
　　　—┘—┘└—└—
	版权归属：萌芽模板网(http://www.vrecf.com)
	描述：苹果cms多资源站整合采集插件
	本插件免费提供，欢迎提出指导意见！！
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>萌芽综合资源库 - 苹果CMS V10</title>
    <link rel="stylesheet" href="/static/css/admin_style.css">
	<link rel="stylesheet" href="/static/layui/css/layui.css">	
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="/<?php echo $list;?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">
    <div class="my-toolbar-box">
        <div class="layui-btn-group">
            <a href="/<?php echo $list;?>/collect/load.html?flag=vod" style="display: inline-block;height: 38px;line-height: 38px;padding: 0 18px;background-color: #FF5722;color: #fff;text-align: center;font-size: 14px;border: none;cursor: pointer;">【进入视频断点采集】</a>  <span style="font-size:12px;color: #0000FF;">采集过程中，中断了点击【断点采集】才会生效</span>
            </div>
    </div>
    <hr>
    <script src="http://www.vrecf.com/caiji/macv10.js" charset="utf-8"></script>
</div>
</body>
</html>