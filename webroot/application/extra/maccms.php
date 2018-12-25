<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'port' => '3306',
    'name' => 'maccms8',
    'user' => 'root',
    'pass' => 'root',
    'tablepre' => 'mac_',
    'backup_path' => './application/data/backup/database/',
    'part_size' => 20971520,
    'compress' => 1,
    'compress_level' => 4,
  ),
  'site' => 
  array (
    'site_name' => '好快影视网',
    'site_url' => 'www.brlao.com',
    'site_wapurl' => 'www.brlao.com',
    'site_keywords' => '免费在线电影',
    'site_description' => '提供最新最快的影视资讯和在线播放',
    'site_icp' => 'icp123',
    'site_qq' => '944742080',
    'site_email' => '944742080@qq.com',
    'install_dir' => '/',
    'site_logo' => 'upload/site/20181209-1/73bac3eb3f6238d5917628330c8d8b7b.png',
    'site_waplogo' => 'upload/site/20181209-1/b98574d3ea43cabc1d8733fcafff9c60.png',
    'template_dir' => 'helen_ten',
    'html_dir' => 'html',
    'mob_status' => '0',
    'mob_template_dir' => 'helen_ten',
    'mob_html_dir' => 'html',
    'site_tj' => '<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5dc74dc5ecbc391ddf757061f23611bd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>',
    'site_status' => '1',
    'site_close_tip' => '站点暂时关闭，请稍后访问',
    'ads_dir' => 'ads',
    'mob_ads_dir' => 'ads',
  ),
  'app' => 
  array (
    'pathinfo_depr' => '/',
    'popedom_filter' => '0',
    'cache_type' => '0',
    'cache_host' => '127.0.0.1',
    'cache_port' => '11211',
    'cache_password' => '',
    'cache_flag' => 'a6bcf9aa58',
    'cache_core' => '1',
    'cache_time' => '3600',
    'cache_page' => '1',
    'cache_time_page' => '3600',
    'compress' => '0',
    'search' => '1',
    'search_timespan' => '3',
    'search_vod_rule' => 'vod_en|vod_actor',
    'collect_timespan' => '3',
    'pagesize' => '20',
    'makesize' => '30',
    'admin_login_verify' => '1',
    'suffix' => 'html',
    'player_sort' => '0',
    'encrypt' => '2',
    'search_hot' => '变形金刚,火影忍者,复仇者联盟,战狼,红海行动,毒液',
    'art_extend_class' => '段子手,私房话,八卦精,爱生活,汽车迷,科技咖,美食家,辣妈帮',
    'vod_extend_class' => '爱情,动作,喜剧,战争,科幻,剧情,武侠,冒险,枪战,恐怖,微电影,其它',
    'vod_extend_state' => '正片,预告片,花絮',
    'vod_extend_version' => '高清版,剧场版,抢先版,OVA,TV,影院版',
    'vod_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'vod_extend_lang' => '国语,英语,粤语,闽南语,韩语,日语,法语,德语,其它',
    'vod_extend_year' => '2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000',
    'vod_extend_weekday' => '一,二,三,四,五,六,日',
    'actor_extend_area' => '内地,港台,日韩,亚洲,欧州,美洲,非洲,大洋洲,其他',
    'filter_words' => 'www,http,com,net',
    'extra_var' => '',
    'search_art_rule' => NULL,
  ),
  'user' => 
  array (
    'status' => '1',
    'reg_open' => '1',
    'reg_status' => '1',
    'reg_phone_sms' => '0',
    'reg_email_sms' => '0',
    'reg_verify' => '1',
    'login_verify' => '0',
    'reg_points' => '10',
    'invite_reg_points' => '10',
    'invite_visit_points' => '1',
    'trysee' => '0',
    'portrait_status' => '1',
    'portrait_size' => '100x100',
    'filter_words' => 'admin,cao,sex,xxx',
  ),
  'gbook' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'comment' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'upload' => 
  array (
    'thumb' => '0',
    'thumb_size' => '300x300',
    'thumb_type' => '1',
    'watermark' => '0',
    'watermark_location' => '7',
    'watermark_content' => 'maccms.com',
    'watermark_size' => '25',
    'watermark_color' => '#FF0000',
    'protocol' => 'http',
    'mode' => '0',
    'remoteurl' => 'http://img.maccms.com/',
    'api' => 
    array (
      'upyun' => 
      array (
        'bucket' => '',
        'username' => '',
        'pwd' => '',
        'url' => '',
      ),
      'qiniu' => 
      array (
        'bucket' => '',
        'accesskey' => '',
        'secretkey' => '',
        'url' => '',
      ),
      'ftp' => 
      array (
        'host' => 'test.maccms.com',
        'port' => '21',
        'user' => 'test',
        'pwd' => 'test',
        'path' => '/',
        'url' => 'http://test.maccms.com',
      ),
      'weibo' => 
      array (
        'user' => '',
        'pwd' => '',
        'size' => 'large',
        'cookie' => '',
        'time' => '1540878790',
      ),
    ),
  ),
  'interface' => 
  array (
    'status' => '1',
    'pass' => 'MXQ8CQ',
    'vodtype' => '动作=动作片',
    'arttype' => '通知=站内公告',
  ),
  'pay' => 
  array (
    'min' => '10',
    'scale' => '1',
    'card' => 
    array (
      'url' => '',
    ),
    'alipay' => 
    array (
      'account' => '',
      'appid' => '',
      'appkey' => '',
    ),
    'weixin' => 
    array (
      'appid' => '',
      'mchid' => '',
      'appkey' => '',
    ),
    'codepay' => 
    array (
      'appid' => '40625',
      'appkey' => 'cI1YHggnYbQyA8lLpOu7wXhtuVjULqZZ',
      'type' => '1,2',
      'act' => '0',
    ),
    'zhapay' => 
    array (
      'appid' => '18039',
      'appkey' => 'bW2V5oo3TdeXzwyjCwVwhX3guDGO8YDX',
      'type' => '1,2',
      'act' => '2',
    ),
    'hck' => 
    array (
      'appid' => '1005',
      'appkey' => 'Dw1C1rmJ14BxXXdCPCr1wZCz4zrmcClJ',
      'type' => 'alipay,tenpay,qqpay,wxpay',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'class_filter' => '1',
      'psernd' => '1',
      'psesyn' => '1',
      'inrule' => ',b,c,d,e,f,g',
      'uprule' => ',a,b',
      'filter' => '色戒,色即是空',
      'thesaurus' => '',
      'words' => '',
    ),
    'art' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'psernd' => '1',
      'psesyn' => '1',
      'inrule' => ',b',
      'uprule' => ',a',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
    ),
    'actor' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c,d,e',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'role' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'inrule' => 
      array (
        2 => 'c',
        3 => 'd',
      ),
      'uprule' => 
      array (
        0 => 'a',
        1 => 'b',
        2 => 'c',
      ),
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img.maccms.com/',
      'typefilter' => '',
      'datafilter' => 'vod_status=1',
      'from' => '',
      'auth' => 'maccms.com#163.com',
    ),
    'art' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.maccms.com/',
      'typefilter' => '',
      'datafilter' => 'art_status=1',
      'auth' => 'qq.com#baidu.com',
    ),
    'actor' => 
    array (
      'status' => '0',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.maccms.com/',
      'datafilter' => 'actor_status=1',
      'auth' => '',
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => '0',
      'key' => 'aa',
      'secret' => 'bb',
    ),
    'weixin' => 
    array (
      'status' => '0',
      'key' => 'cc',
      'secret' => 'dd',
    ),
  ),
  'weixin' => 
  array (
    'status' => '1',
    'duijie' => 'wx.maccms.com',
    'sousuo' => 'wx.maccms.com',
    'token' => 'qweqwe',
    'guanzhu' => '欢迎关注',
    'wuziyuan' => '没找到资源，请更换关键词或等待更新',
    'wuziyuanlink' => 'demo.maccms.com',
    'bofang' => '1',
    'gjc1' => '关键词1',
    'gjcm1' => '长城',
    'gjci1' => 'http://img.aolusb.com/im/201610/2016101222371965996.jpg',
    'gjcl1' => 'http://www.loldytt.com/Dongzuodianying/CC/',
    'gjc2' => '关键词2',
    'gjcm2' => '生化危机6',
    'gjci2' => 'http://img.aolusb.com/im/201702/20172711214866248.jpg',
    'gjcl2' => 'http://www.loldytt.com/Kehuandianying/SHWJ6ZZ/',
    'gjc3' => '关键词3',
    'gjcm3' => '湄公河行动',
    'gjci3' => 'http://img.aolusb.com/im/201608/201681719561972362.jpg',
    'gjcl3' => 'http://www.loldytt.com/Dongzuodianying/GHXD/',
    'gjc4' => '关键词4',
    'gjcm4' => '王牌逗王牌',
    'gjci4' => 'http://img.aolusb.com/im/201601/201612723554344882.jpg',
    'gjcl4' => 'http://www.loldytt.com/Xijudianying/WPDWP/',
  ),
  'view' => 
  array (
    'index' => '0',
    'map' => '0',
    'search' => '0',
    'rss' => '0',
    'label' => '0',
    'vod_type' => '0',
    'vod_show' => '0',
    'art_type' => '0',
    'art_show' => '0',
    'topic_index' => '0',
    'topic_detail' => '0',
    'vod_detail' => '0',
    'vod_play' => '0',
    'vod_down' => '0',
    'art_detail' => '0',
  ),
  'path' => 
  array (
    'topic_index' => 'topic/index',
    'topic_detail' => 'topic/{id}/index',
    'vod_type' => 'vodtypehtml/{id}/index',
    'vod_detail' => 'vodhtml/{id}/index',
    'vod_play' => 'vodplayhtml/{id}/index',
    'vod_down' => 'voddownhtml/{id}/index',
    'art_type' => 'arttypehtml/{id}/index',
    'art_detail' => 'arthtml/{id}/index',
    'page_sp' => '_',
    'suffix' => 'html',
  ),
  'rewrite' => 
  array (
    'suffix_hide' => '0',
    'route_status' => '0',
    'status' => '0',
    'vod_id' => '0',
    'art_id' => '0',
    'type_id' => '0',
    'topic_id' => '0',
    'actor_id' => '0',
    'role_id' => '0',
    'route' => 'map   => map/index
rss   => rss/index

index-<page>   => index/index

gbook-<page>   => gbook/index
gbook$   => gbook/index

topic-<page?>   => topic/index
topic  => topic/index
topicdetail-<id>   => topic/detail

actor-<page?>   => actor/index
actor=> actor/index
actordetail-<id>   => actor/detail
actorshow/<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>   => actor/show

role-<page?>   => role/index
role=> role/index
roledetail-<id>   => role/detail
roleshow/<by?>-<letter?>-<level?>-<order?>-<page?>-<rid?>  => role/show

vodtype/<id>-<page?>   => vod/type
vodtype/<id>   => vod/type
voddetail-<id>   => vod/detail
vodrss-<id>   => vod/rss
vodplay/<id>-<sid>-<nid>   => vod/play
voddown/<id>-<sid>-<nid>   => vod/down
vodshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/show
vodsearch/<wd?>-<actor?>-<area?>-<by?>-<class?>-<director?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/search


arttype/<id>-<page?>   => art/type
arttype/<id>   => art/type
artshow-<id>   => art/show
artdetail-<id>-<page?>   => art/detail
artdetail-<id>   => art/detail
artrss-<id>-<page>   => art/rss
artshow/<id>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/show
artsearch/<wd?>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/search

label-<file> => label/index',
  ),
  'email' => NULL,
  'play' => 
  array (
    'width' => '0',
    'height' => '660',
    'widthmob' => '0',
    'heightmob' => '660',
    'widthpop' => '0',
    'heightpop' => '600',
    'second' => '5',
    'prestrain' => '//union.maccms.net/html/prestrain.html',
    'buffer' => '//union.maccms.net/html/buffer.html',
    'parse' => '//api.maccms.com/parse/?url=',
    'autofull' => '0',
    'showtop' => '1',
    'showlist' => '1',
    'flag' => '0',
    'colors' => '000000,F6F6F6,F6F6F6,333333,666666,FFFFF,FF0000,2c2c2c,ffffff,a3a3a3,2c2c2c,adadad,adadad,48486c,fcfcfc',
  ),
  'urlsend' => 
  array (
    'baidu_push_token' => '11',
    'baidu_bear_appid' => '22',
    'baidu_bear_token' => '33',
  ),
  'sms' => 
  array (
    'type' => '',
    'appid' => 'xxxx',
    'appkey' => 'xxxx',
    'sign' => '苹果CMS',
    'tpl_code_reg' => 'aaa',
    'tpl_code_bind' => 'bbb',
    'tpl_code_findpass' => 'ccc',
  ),
  'extra' => 
  array (
  ),
);
?>