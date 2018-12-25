<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"template/helen_ten/html/vod/detail.html";i:1528285480;s:60:"/var/www/webroot/template/helen_ten/html/public/include.html";i:1529077721;s:57:"/var/www/webroot/template/helen_ten/html/public/head.html";i:1531309328;s:57:"/var/www/webroot/template/helen_ten/html/public/foot.html";i:1528285465;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php echo $obj['vod_name']; ?>详情介绍-<?php echo $obj['vod_name']; ?>在线观看-<?php echo $obj['vod_name']; ?>迅雷下载 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线收看,<?php echo $obj['vod_name']; ?>迅雷下载" />
    <meta name="description" content="<?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />
    		<link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>images/favicon.ico" type="image/x-icon" />
		<link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>css/iconfont.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>css/stui_block.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>css/stui_default.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>css/stui_custom.css" type="text/css" />
		<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/stui_default.js"></script>
		<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
		<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
		<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
		<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
		
	</head>
  
  <body>
        <header class="stui-header__top clearfix" id="header-top">
      <div class="container">
        <div class="row">
          <div class="stui-header_bd clearfix">
            <div class="stui-header__logo">
              <a class="logo" href="http://<?php echo $maccms['site_url']; ?>"></a>
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
                <form name="search" id="search" action="<?php echo mac_url('vod/search'); ?>" method="post" autocomplete="off">
                  <input class="form-control mac_wd" id="wd" placeholder="100万部影片任你搜" name="wd" type="text" required="">
                  <input type="submit" id="searchbutton" value="" class="hide">
                  <button class="submit" id="submit" onClick="$('#formsearch').submit();">
                    <i class="icon iconfont icon-search"></i>
                  </button>
                </form>
              </div>
            </div>
            <ul class="stui-header__menu type-slide">
              <li <?php if($maccms['aid'] == 1): ?> class="active" <?php endif; ?>>
                <a href="<?php echo $maccms['path']; ?>">首页</a></li>
				<?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
              <li <?php if($obj['type_id'] == $vo['type_id']): ?> class="active" <?php endif; ?>>
                <a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
			  </li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
              <li <?php if($maccms['aid'] == 4): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url('gbook/index'); ?>"  >留言</a></li>
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
		<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li class="col-xs-4"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="stui-pannel stui-pannel-bg clearfix">
          <div class="stui-pannel-box clearfix">
            <div class="stui-pannel_bd clearfix">
              <div class="col-md-wide-75 col-xs-1">
                <div class="stui-content clearfix">
                  <div class="stui-content__thumb">
					<a class="stui-vodlist__thumb img-shadow v-thumb" href="<?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>">
                      <img src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
                      <span class="play active hidden-xs"></span>
                      <span class="pic-text text-right">高清</span></a>
                  </div>
                  <div class="stui-content__detail">
                    <h3 class="title"><?php echo $obj['vod_name']; ?></h3>
                    <p class="data">
                      <span class="text-muted">主演：</span>
                      <?php echo mac_url_create($obj['vod_actor'],'actor'); ?>&nbsp;
					</p>
                    <p class="data">
                      <span class="text-muted">导演：</span>
                      <?php echo mac_url_create($obj['vod_director'],'director'); ?>&nbsp;</p>
                    <p class="data">
                      <span class="text-muted">类型：</span>
                      <?php echo mac_url_create($obj['vod_class'],'class'); ?>
                      <span class="split-line"></span>
                      <span class="text-muted hidden-xs">地区：</span>
                      <?php echo mac_url_create($obj['vod_area'],'area'); ?>&nbsp;
                      <span class="split-line"></span>
                      <span class="text-muted hidden-xs">年份：</span>
					  <?php echo mac_url_create($obj['vod_year'],'year'); ?>
					  </p>
                    <p class="desc detail hidden-xs">
                      <span class="left text-muted">简介：</span>
                      <span class="detail-sketch"><?php echo $obj['vod_blurb']; ?>… </span>
                      <span class="detail-content" style="display: none;"><?php echo $obj['vod_blurb']; ?>… </span>
                      <a class="detail-more" href="javascript:;">详情
                        <i class="icon iconfont icon-moreunfold"></i></a>
                    </p>
                    <div class="play-btn clearfix">
                      <div class="share bdsharebuttonbox hidden-sm hidden-xs pull-right">
                        <span class="bds_shere"></span>
                        <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        <a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        <a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a>
                        <a class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a>
                        <a class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
                        <a class="bds_more" data-cmd="more" title="更多"></a>
                      </div>
                      <a class="btn btn-primary" href="<?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>">立即播放</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-wide-25 hidden-md hidden-sm hidden-xs">
                <div class="text-center" style="padding: 45px;">
                  <p>
                    <img width="180" height="180" src="http://qr.liantu.com/api.php?&w=200&text=http://<?php echo $maccms['site_url']; ?><?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>" /></p>
                  <p class="font-12">扫码用手机观看</p></div>
              </div>
            </div>
          </div>
        </div>
        <!-- 详细信息-->
		<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
        <div class="stui-pannel stui-pannel-bg clearfix">
          <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
              <div class="stui-pannel__head bottom-line active clearfix">
                <span class="more text-muted pull-right"><?php echo $vo['player_info']['tip']; ?></span>
                <h3 class="title"><?php echo $vo['player_info']['show']; ?></h3></div>
            </div>
            <div class="stui-pannel_bd col-pd clearfix">
              <ul class="stui-content__playlist column10 clearfix">
			  <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
                <li><a title='<?php echo $vo2['name']; ?>' href='<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>' target="_self"><?php echo $vo2['name']; ?></a></li>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
        </div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 播放列表-->
        <div class="stui-pannel stui-pannel-bg clearfix">
          <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
              <div class="stui-pannel__head clearfix">
                <h3 class="title">
                  <img src="<?php echo $maccms['path_tpl']; ?>images/icon_6.png" />猜你喜欢</h3></div>
            </div>
            <div class="stui-pannel_bd">
              <ul class="stui-vodlist__bd clearfix">
			  <?php $__TAG__ = '{"num":"12","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="col-md-6 col-sm-4 col-xs-3">
                  <div class="stui-vodlist__box">
					<a class="stui-vodlist__thumb img-shadow" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
                      <img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
                      <span class="play hidden-xs"></span>
                      <span class="pic-text text-right"><?php if($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></span></a>
                    <div class="stui-vodlist__detail">
                      <h4 class="title text-overflow">
                        <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
                      <p class="text text-overflow text-muted hidden-xs"><?php echo $vo['vod_actor']; ?></p></div>
                  </div>
                </li>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- 猜你喜欢-->
		<span style="display:none" class="mac_ulog_set" alt="设置内容页浏览记录" data-type="1" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
		<span style="display:none" class="mac_history_set" alt="设置History历史记录" data-name="[<?php echo $obj['type']['type_name']; ?>]<?php echo $obj['vod_name']; ?>" data-pic="<?php echo mac_url_img($obj['vod_pic']); ?>"></span>
		</div>
    </div>
	    <div class="container">
      <div class="row">
        <div class="stui-foot clearfix">
          <div class="col-pd text-center hidden-xs"></div>
          <p align="center" class="text-muted text-center">免责声明：若本站收录的资源侵犯了您的权益，请发邮件至：<?php echo $maccms['site_email']; ?>，我们会及时删除侵权内容，谢谢合作！</p>
          <p align="center" class="text-muted text-center">Copyright &#169; 2012-2018 <?php echo $maccms['site_url']; ?>. All Rights Reserved.</p></div>
      </div>
      <div style="text-align:center">
	  <?php echo $maccms['site_tj']; ?>
      </div>
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
              <img  width="150" height="150" src="http://qr.liantu.com/api.php?&w=200&text=http://<?php echo $maccms['site_url']; ?>" />
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
		<?php echo $maccms['site_tj']; ?>
      </div>
  </body>

</html>