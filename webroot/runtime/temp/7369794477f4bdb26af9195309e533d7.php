<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:37:"template/helen_ten/html/vod/type.html";i:1537341769;s:60:"/var/www/webroot/template/helen_ten/html/public/include.html";i:1529077721;s:57:"/var/www/webroot/template/helen_ten/html/public/head.html";i:1531309328;s:59:"/var/www/webroot/template/helen_ten/html/public/paging.html";i:1533640565;s:57:"/var/www/webroot/template/helen_ten/html/public/foot.html";i:1528285465;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php echo $obj['type_title']; ?> - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
    <meta name="description" content="<?php echo $obj['type_des']; ?>" />
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
          <div class="stui-pannel-box">
            <div class="stui-pannel_hd">
              <div class="stui-pannel__head active bottom-line clearfix">
                <h3 class="title">
                  <img src="<?php echo $maccms['path_tpl']; ?>images/icon_2.png" /><?php echo $obj['type_name']; ?> </h3>
                <p class="pull-right">今日更新
                  <font color="red"><?php echo mac_data_count(0,'today','vod'); ?></font>部</p></div>
              <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                <li class="clearfix">
                    
					 <span class="v-tit">分类：</span>
					<?php if(($obj['type_id']==1) OR ($obj['parent']['type_id']==1)): $__TAG__ = '{"ids":"child","parent":"1","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?> ><?php echo $vo['type_name']; ?>  </a><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_id']==2) OR ($obj['parent']['type_id']==2)): $__TAG__ = '{"ids":"child","parent":"2","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; endif; if(($obj['type_id']==3) OR ($obj['parent']['type_id']==3)): $__TAG__ = '{"ids":"child","parent":"3","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_id']==4) OR ($obj['parent']['type_id']==4)): $__TAG__ = '{"ids":"child","parent":"4","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </li>
				
              </ul>
              <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                <li>
                  <span class="text-muted">按地区</span></li>
                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5c1c959d82abe=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5c1c959d82abe) || $_5c1c959d82abe instanceof \think\Collection || $_5c1c959d82abe instanceof \think\Paginator): if( count($_5c1c959d82abe)==0 ) : echo "" ;else: foreach($_5c1c959d82abe as $key=>$vo): ?>
                    <li><a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>" target='_self'><?php echo $vo; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c1c959d82aaf=explode(',',$obj['type_extend']['area']); if(is_array($_5c1c959d82aaf) || $_5c1c959d82aaf instanceof \think\Collection || $_5c1c959d82aaf instanceof \think\Paginator): if( count($_5c1c959d82aaf)==0 ) : echo "" ;else: foreach($_5c1c959d82aaf as $key=>$vo): ?>
                    <li><a href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>" target='_self'><?php echo $vo; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
              </ul>
              <ul class="stui-screen__list type-slide clearfix">
                <li>
                  <span class="text-muted">按年份</span></li>
                <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5c1c959d82a8b=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5c1c959d82a8b) || $_5c1c959d82a8b instanceof \think\Collection || $_5c1c959d82a8b instanceof \think\Paginator): if( count($_5c1c959d82a8b)==0 ) : echo "" ;else: foreach($_5c1c959d82a8b as $key=>$vo): ?>
                    <li><a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>" ><?php echo $vo; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c1c959d82a77=explode(',',$obj['type_extend']['year']); if(is_array($_5c1c959d82a77) || $_5c1c959d82a77 instanceof \think\Collection || $_5c1c959d82a77 instanceof \think\Paginator): if( count($_5c1c959d82a77)==0 ) : echo "" ;else: foreach($_5c1c959d82a77 as $key=>$vo): ?>
                    <li><a href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>"><?php echo $vo; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
              </ul>
            </div>
            <div class="stui-pannel_bd">
              <ul class="stui-vodlist clearfix">
			  <?php $__TAG__ = '{"num":"60","type":"current","pageurl":"vod\/type","paging":"yes","half":"3","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
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
        <!-- 筛选列表 -->
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