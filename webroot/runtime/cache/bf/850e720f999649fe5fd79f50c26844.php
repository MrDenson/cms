<?php
//000000003600
 exit();?>
s:10081:"<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width ,initial-scale = 1,minimum-scale = 1,maximum-scale = 1,user-scalable =no,"/>
    <title>留言板 - 好快影视网</title>
    		<link rel="shortcut icon" href="/template/helen_ten/images/favicon.ico" type="image/x-icon" />
		<link href="/static/css/home.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/template/helen_ten/css/iconfont.css" type="text/css" />
		<link rel="stylesheet" href="/template/helen_ten/css/stui_block.css" type="text/css" />
		<link rel="stylesheet" href="/template/helen_ten/css/stui_default.css" type="text/css" />
		<link rel="stylesheet" href="/template/helen_ten/css/stui_custom.css" type="text/css" />
		<script type="text/javascript" src="/template/helen_ten/js/jquery.min.js"></script>
		<script type="text/javascript" src="/template/helen_ten/js/stui_default.js"></script>
		<script src="/static/js/jquery.lazyload.js"></script>
		<script src="/template/helen_ten/js/jquery.lazyload.js"></script>
		<script>var maccms={"path":"","mid":"5","url":"www.brlao.com","wapurl":"www.brlao.com","mob_status":"0"};</script>
		<script src="/static/js/home.js"></script>
		
    <script>
        $(function(){
            MAC.Gbook.Login = 0;
            MAC.Gbook.Verify = 1;
            MAC.Gbook.Init();
        });
    </script>
</head>
<body>
    <header class="stui-header__top clearfix" id="header-top">
      <div class="container">
        <div class="row">
          <div class="stui-header_bd clearfix">
            <div class="stui-header__logo">
              <a class="logo" href="http://www.brlao.com"></a>
            </div>
            <div class="stui-header__side">
              <ul class="stui-header__user">
                <li class="visible-xs">
                  <a class="open-popup" href="javascript:;">
                    <i class="icon iconfont icon-viewgallery"></i>
                  </a>
                </li>
              </ul>
              <div class="stui-header__search">
                <form name="search" id="search" action="/index.php/vod/search.html" method="post" autocomplete="off">
                  <input class="form-control mac_wd" id="wd" placeholder="100万部影片任你搜" name="wd" type="text" required="">
                  <input type="submit" id="searchbutton" value="" class="hide">
                  <button class="submit" id="submit" onClick="$('#formsearch').submit();">
                    <i class="icon iconfont icon-search"></i>
                  </button>
                </form>
              </div>
            </div>
            <ul class="stui-header__menu type-slide">
              <li >
                <a href="/">首页</a></li>
				              <li >
                <a href="/index.php/vod/type/id/1.html">电影</a>
			  </li>
				              <li >
                <a href="/index.php/vod/type/id/2.html">连续剧</a>
			  </li>
				              <li >
                <a href="/index.php/vod/type/id/3.html">综艺</a>
			  </li>
				              <li >
                <a href="/index.php/vod/type/id/4.html">动漫</a>
			  </li>
				              <li  class="active" ><a href="/index.php/gbook/index.html"  >留言</a></li>
              <li><a href="javascript:;" class="mac_history">播放记录</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="popup clearfix">
      <div class="popup-head bottom-line">
        <h5 class="title pull-right">全部分类</h5>
        <a href="javascript:;" class="close-popup">
          <i class="icon iconfont icon-back"></i>
        </a>
      </div>
      <div class="popup-body col-pd">
        <ul class="tag tag-type">
		          <li class="col-xs-4"><a href="/index.php/vod/type/id/1.html">电影</a></li>
		          <li class="col-xs-4"><a href="/index.php/vod/type/id/2.html">连续剧</a></li>
		          <li class="col-xs-4"><a href="/index.php/vod/type/id/3.html">综艺</a></li>
		          <li class="col-xs-4"><a href="/index.php/vod/type/id/4.html">动漫</a></li>
		        </ul>
      </div>
    </div>
<div class="wrap wrap_ff">
    <section class="reply_box clearfix">
        <!--留言开始-->
        <div class="mac_msg_l">
                        <div class="mac_msg_item">
                <div class="msg_tag">
                    <div class="count_bg"></div>
                    <div class="msg_count"><strong>第3</strong>条留言</div>
                </div>
                <div class="msg_list">
                    <div class="msg_reply">
                        <p class="msg_title"><strong><a class="name" href="javascript:;">游客</a><a target="_blank">(0.0.*.*)</a></strong><span class="time">2018-12-19 15:55:08</span></p>
                        <div class="msg_cont">
                            好牛逼啊                        </div>
                    </div>
                                    </div>
            </div>
                        <div class="mac_msg_item">
                <div class="msg_tag">
                    <div class="count_bg"></div>
                    <div class="msg_count"><strong>第2</strong>条留言</div>
                </div>
                <div class="msg_list">
                    <div class="msg_reply">
                        <p class="msg_title"><strong><a class="name" href="javascript:;">游客</a><a target="_blank">(111.75.*.*)</a></strong><span class="time">2018-12-16 09:41:30</span></p>
                        <div class="msg_cont">
                            好多资源，不错                        </div>
                    </div>
                                        <div class="reply_answer">
                        <p class="msg_title"><strong>站长回复：</strong><span class="time">2018-12-16 09:46:04</span></p>
                        <div class="msg_cont">
                            谢谢您的支持！                        </div>
                    </div>
                                    </div>
            </div>
                    </div>
        <div class="mac_msg_r">
            <div class="msg_tit">我要留言</div>
            <form class="gbook_form">
                <p class="msg_cue">请输入您的留言内容：</p>
                <textarea class="gbook_content" name="gbook_content"></textarea>
                <div class="msg_code">
                                        验证码：<input type="text" name="verify" class="mac_verify">
                                        <div class="remaining-w fr">还可输入<span class="gbook_remaining remaining " >200</span></div>
                </div>
                <input type="button" class="gbook_submit submit_btn" value="提交留言">
            </form>
        </div>
        <!--留言结束-->
    </section>

    <ul class="stui-page text-center cleafix">
   <!--  <li class="disabled"><a href="javascript:void(0);">共2条数据,当前1/1页</a></li> -->
    <div class="page_info">
        <li><a class="pagelink_a" href="/index.php/gbook/index/page/1.html" title="首页">首页</a></li>
        <li><a class="pagelink_a" href="/index.php/gbook/index/page/1.html" title="上一页">上一页</a></li>
                <li class="mbnone"><a class="pagelink_b" href="javascript:;" title="第1页">1</a></li>
                <li><a class="pagelink_a" href="/index.php/gbook/index/page/1.html" title="下一页">下一页</a></li>
        <li><a class="pagelink_a" href="/index.php/gbook/index/page/1.html" title="尾页">尾页</a></li>
    </div>
</ul>

</div>
    <div class="container">
      <div class="row">
        <div class="stui-foot clearfix">
          <div class="col-pd text-center hidden-xs"></div>
          <p align="center" class="text-muted text-center">免责声明：若本站收录的资源侵犯了您的权益，请发邮件至：944742080@qq.com，我们会及时删除侵权内容，谢谢合作！</p>
          <p align="center" class="text-muted text-center">Copyright &#169; 2012-2018 www.brlao.com. All Rights Reserved.</p></div>
      </div>
      <div style="text-align:center">
	  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5dc74dc5ecbc391ddf757061f23611bd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>      </div>
      <ul class="stui-extra clearfix">
        <li>
          <a class="backtop" href="javascript:scroll(0,0)" style="display: none;">
            <i class="icon iconfont icon-less"></i>
          </a>
        </li>
        <li class="visible-xs">
          <a class="open-share" href="javascript:;">
            <i class="icon iconfont icon-share"></i>
          </a>
        </li>
        <li class="hidden-xs">
          <span>
            <i class="icon iconfont icon-qrcode"></i>
          </span>
          <div class="sideslip">
            <div class="col-pd">
              <img  width="150" height="150" src="http://qr.liantu.com/api.php?&w=200&text=http://www.brlao.com" />
              <p class="text-center font-12">扫码用手机访问</p></div>
          </div>
        </li>
        <li title="会员中心">
          <a class="open-share" href="#">
            <i class="icon iconfont icon-smile"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="icon iconfont icon-comments"></i>
          </a>
        </li>
      </ul>
      <div class="hide">
		<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5dc74dc5ecbc391ddf757061f23611bd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>      </div>
</body>
</html>";