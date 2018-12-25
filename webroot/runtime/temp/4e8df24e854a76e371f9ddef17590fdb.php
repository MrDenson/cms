<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/helen_ten/html/index/index.html";i:1533548481;s:60:"/var/www/webroot/template/helen_ten/html/public/include.html";i:1529077721;s:57:"/var/www/webroot/template/helen_ten/html/public/head.html";i:1531309328;s:57:"/var/www/webroot/template/helen_ten/html/public/foot.html";i:1528285465;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
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
            <div class="stui-pannel-bd">
				<div class="carousel flickity-page" data-flickity="{ &quot;autoPlay&quot;: 2500,&quot;freeScroll&quot;: true, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: false, &quot;pageDots&quot;: true  }">
				<?php $__TAG__ = '{"num":"12","type":"all","order":"desc","by":"time","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>  
				<div class="carousel-cell col-md-2 col-xs-1">
				<a href="<?php echo mac_url_vod_detail($vo); ?>" class="stui-vodlist__thumb" title="<?php echo $vo['vod_name']; ?>" style="background: url(<?php echo $vo['vod_pic_slide']; ?>) no-repeat; background-position:50% 50%; background-size: cover; padding-top: 40%;"><span class="pic-text text-center"><?php echo $vo['vod_name']; ?></span></a>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
            </div>
          </div>
        </div>
        <!-- 幻灯片 -->
		<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"type","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($key % 2 );++$key;?>
        <div class="stui-pannel stui-pannel-bg clearfix">
          <div class="stui-pannel-box clearfix">
            <div class="col-lg-wide-75 col-xs-1 padding-0">
              <div class="stui-pannel_hd">
                <div class="stui-pannel__head clearfix">
                  <a class="more text-muted pull-right" href="<?php echo mac_url_type($type); ?>">更多
                    <i class="icon iconfont icon-more"></i></a>
                  <h3 class="title">
                    <img src="<?php echo $maccms['path_tpl']; ?>images/icon_1.png" />
                    <a href="<?php echo mac_url_type($type); ?>"> <?php echo $type['type_name']; ?></a></h3>
					<!--<a href="<?php echo mac_url_type($vo); ?>"> <?php echo $type['type_name']; ?></a></h3>-->
					 <ul class="nav nav-text pull-right hidden-sm hidden-xs">
                     </ul>
                </div>
              </div>
              <div class="stui-pannel_bd clearfix">
                <ul class="stui-vodlist clearfix">
				<?php $__TAG__ = '{"num":"12","ids":"all","type":"'.$type['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                  <li class="col-md-5 col-sm-4 col-xs-3">
                    <div class="stui-vodlist__box">
                      <a class="stui-vodlist__thumb img-shadow" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
                        <img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
						<span class="play hidden-xs"></span>
                        <span class="pic-text text-right"><?php if($vo['vod_pic']): ?>第<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></span>
					  </a>
                      <div class="stui-vodlist__detail">
                        <h4 class="title text-overflow" align="center">
                          <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
                      </div>
                    </div>
                  </li>
				  <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
            </div>
           
          </div>
        </div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 分类列表 -->
        <div class="stui-pannel stui-pannel-bg hidden-sm hidden-xs clearfix">
          <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
              <div class="stui-pannel__head clearfix">
                <h3 class="title">
                  <img src="<?php echo $maccms['path_tpl']; ?>images/icon_26.png" />友情链接</h3></div>
            </div>
            <div class="stui-pannel_bd clearfix">
              <div class="col-xs-1">
                <ul class="stui-link__text clearfix">
				 
                    
				 <?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				 
				 <li><a  href="<?php echo $vo['link_url']; ?>"target="_blank"><?php echo $vo['link_name']; ?></a></li>
				 <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
              </div>
            </div>
          </div>
        </div>
        <!-- 友情链接 -->
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