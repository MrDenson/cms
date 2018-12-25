<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:39:"template/helen_ten/html/vod/search.html";i:1538039277;s:60:"/var/www/webroot/template/helen_ten/html/public/include.html";i:1529077721;s:57:"/var/www/webroot/template/helen_ten/html/public/head.html";i:1531309328;s:59:"/var/www/webroot/template/helen_ten/html/public/paging.html";i:1533640565;s:57:"/var/www/webroot/template/helen_ten/html/public/foot.html";i:1528285465;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果" />
<meta name="description" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果" />
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
<body>    <header class="stui-header__top clearfix" id="header-top">
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
		<div class="col-lg-wide-75 col-xs-1 padding-0">
			<div class="stui-pannel stui-pannel-bg clearfix">
				<div class="stui-pannel-box">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<div class="nav nav-page pull-right">
							</div>
							<span class="more text-muted pull-right hidden-xs">找到"
								<strong style="color:#4c8fe8" class="mac_total"></strong>"个资源</span>
							<h3 class="title">
								<img src="<?php echo $maccms['path_tpl']; ?>images/icon_27.png" />与"<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>"相关的影片</h3></div>
					</div>
					<div class="stui-pannel_bd">
						<ul class="stui-vodlist__media col-pd clearfix"><?php $__TAG__ = '{"num":"20","paging":"yes","pageurl":"vod\/search","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="active top-line-dot clearfix">
								<div class="thumb">
									<a class="v-thumb stui-vodlist__thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
										<img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
										<span class="play hidden-xs"></span>
										<span class="pic-text text-right"><?php if($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></span>
									</a>
								</div>
								<div class="detail">
									<h3 class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"><?php echo $vo['vod_name']; ?></a></h3>
									<p><span class="text-muted">导演：</span><?php echo $vo['vod_director']; ?>&nbsp;</p>
									<p><span class="text-muted">主演：</span><?php echo $vo['vod_actor']; ?></p>
									<p><span class="text-muted">类型：</span><?php echo $vo['type']['type_name']; ?><span class="lineh"></span><span class="text-muted">地区：</span><?php echo $vo['vod_area']; ?><span class="hidden-xs"><span class="lineh"></span><span class="text-muted">年份：</span><?php echo mac_default($vo['vod_year']); ?></span></p>
									<p class="margin-0 hidden-sm hidden-xs"><span class="text-muted">简介：</span><?php echo $vo['vod_blurb']; ?>……</p>
								</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- 搜索列表 -->
			<?php if($__PAGING__['record_total'] > 0): ?>
<ul class="stui-page text-center cleafix">
   <!--  <li class="disabled"><a href="javascript:void(0);">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</a></li> -->
    <div class="page_info">
        <li><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a></li>
        <li><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a></li>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <li class="mbnone"><a class="pagelink_b" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a></li>
        <?php else: ?>
        <li class="mbnone"><a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <li><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a></li>
        <li><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a></li>
    </div>
</ul>
<?php else: ?>
<div class="wrap">
    <h1>没有找到匹配数据</h1>
</div>
<?php endif; ?>
			<!-- 列表翻页-->
		</div>
		<script>$('.mac_total').html('<?php echo $__PAGING__['record_total']; ?>');</script>
		
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