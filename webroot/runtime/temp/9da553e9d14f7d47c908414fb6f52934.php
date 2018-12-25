<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:40:"template/helen_ten/html/gbook/index.html";i:1521419344;s:60:"/var/www/webroot/template/helen_ten/html/public/include.html";i:1529077721;s:57:"/var/www/webroot/template/helen_ten/html/public/head.html";i:1531309328;s:59:"/var/www/webroot/template/helen_ten/html/public/paging.html";i:1533640565;s:57:"/var/www/webroot/template/helen_ten/html/public/foot.html";i:1528285465;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width ,initial-scale = 1,minimum-scale = 1,maximum-scale = 1,user-scalable =no,"/>
    <title>留言板 - <?php echo $maccms['site_name']; ?></title>
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
		
    <script>
        $(function(){
            MAC.Gbook.Login = <?php echo $gbook['login']; ?>;
            MAC.Gbook.Verify = <?php echo $gbook['verify']; ?>;
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
<div class="wrap wrap_ff">
    <section class="reply_box clearfix">
        <!--留言开始-->
        <div class="mac_msg_l">
            <?php $__TAG__ = '{"num":"10","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Gbook")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <div class="mac_msg_item">
                <div class="msg_tag">
                    <div class="count_bg"></div>
                    <div class="msg_count"><strong>第<?php echo $vo['gbook_id']; ?></strong>条留言</div>
                </div>
                <div class="msg_list">
                    <div class="msg_reply">
                        <p class="msg_title"><strong><a class="name" href="javascript:;"><?php echo $vo['gbook_name']; ?></a><a target="_blank">(<?php echo mac_long2ip($vo['gbook_ip']); ?>)</a></strong><span class="time"><?php echo date('Y-m-d H:i:s',$vo['gbook_time']); ?></span></p>
                        <div class="msg_cont">
                            <?php echo $vo['gbook_content']; ?>
                        </div>
                    </div>
                    <?php if($vo['gbook_reply_time'] > 0): ?>
                    <div class="reply_answer">
                        <p class="msg_title"><strong>站长回复：</strong><span class="time"><?php echo date('Y-m-d H:i:s',$vo['gbook_reply_time']); ?></span></p>
                        <div class="msg_cont">
                            <?php echo $vo['gbook_reply']; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="mac_msg_r">
            <div class="msg_tit">我要留言</div>
            <form class="gbook_form">
                <p class="msg_cue">请输入您的留言内容：</p>
                <textarea class="gbook_content" name="gbook_content"></textarea>
                <div class="msg_code">
                    <?php if($gbook['verify'] == 1): ?>
                    验证码：<input type="text" name="verify" class="mac_verify">
                    <?php endif; ?>
                    <div class="remaining-w fr">还可输入<span class="gbook_remaining remaining " >200</span></div>
                </div>
                <input type="button" class="gbook_submit submit_btn" value="提交留言">
            </form>
        </div>
        <!--留言结束-->
    </section>

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