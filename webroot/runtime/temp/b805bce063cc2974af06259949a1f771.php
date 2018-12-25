<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/var/www/webroot/application/admin/view/system/configweixin.html";i:1540180347;s:56:"/var/www/webroot/application/admin/view/public/head.html";i:1538197828;s:56:"/var/www/webroot/application/admin/view/public/foot.html";i:1538197828;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>

<div class="page-container">
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">微信对接设置</li>
            </ul>
            <div class="layui-tab-content">



            <div class="layui-tab-item layui-show">
                <blockquote class="layui-elem-quote layui-quote-nm">
                    公众号对接域名、公众号搜索域名、网站域名通常一致，因公众号可能产生的封域名问题，你可以单独设置域名进行对接。<br>
                    接口地址/api.php/wechat
                </blockquote>

                <div class="layui-form-item">
                    <label class="layui-form-label">状态：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="weixin[status]" value="0" title="关闭" <?php if($config['weixin']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="weixin[status]" value="1" title="开启" <?php if($config['weixin']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">对接域名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="weixin[duijie]" placeholder="请以http 或 https开头，公众号后台的对接地址为【http://wx.maccms.com/inc/weixin.php】" value="<?php echo $config['weixin']['duijie']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">搜索域名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="weixin[sousuo]" placeholder="用来在公共号内显示的域名，一般红名更换此域名即可，请以http 或 https开头" value="<?php echo $config['weixin']['sousuo']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">对接TOKEN：</label>
                    <div class="layui-input-block">
                        <input type="text" name="weixin[token]" placeholder="公众号后台对接的token密钥" value="<?php echo $config['weixin']['token']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">关注回复：</label>
                    <div class="layui-input-block">
                        <input type="text" name="weixin[guanzhu]" placeholder="用户关注你的公众号时自动回复的一句话" value="<?php echo $config['weixin']['guanzhu']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">无资源回复：</label>
                    <div class="layui-input-block">
                        <input type="text" name="weixin[wuziyuan]" placeholder="用户搜索不到资源时默认返回的信息" value="<?php echo $config['weixin']['wuziyuan']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">无资源回复链接：</label>
                    <div class="layui-input-block">
                        <input type="text" name="weixin[wuziyuanlink]" placeholder="站长客服邮箱" value="<?php echo $config['weixin']['wuziyuanlink']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">返回页面地址：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="weixin[bofang]" value="0" title="内容页面" <?php if($config['weixin']['bofang'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="weixin[bofang]" value="1" title="播放页面" <?php if($config['weixin']['bofang'] == 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="weixin[bofang]" value="2" title="搜索页面" <?php if($config['weixin']['bofang'] == 2): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">返回内容类型：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="weixin[msgtype]" value="0" title="图文" <?php if($config['weixin']['msgtype'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="weixin[msgtype]" value="1" title="文字" <?php if($config['weixin']['msgtype'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">微信新规定图文只能返回1条</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">
                        自定义关键词1：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjc1]" placeholder="关键词1" value="<?php echo $config['weixin']['gjc1']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcm1]" placeholder="返回文字" value="<?php echo $config['weixin']['gjcm1']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjci1]" placeholder="返回图片" value="<?php echo $config['weixin']['gjci1']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcl1]" placeholder="返回链接" value="<?php echo $config['weixin']['gjcl1']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        自定义关键词1：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjc2]" placeholder="关键词2" value="<?php echo $config['weixin']['gjc2']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcm2]" placeholder="返回文字" value="<?php echo $config['weixin']['gjcm2']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjci2]" placeholder="返回图片" value="<?php echo $config['weixin']['gjci2']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcl2]" placeholder="返回链接" value="<?php echo $config['weixin']['gjcl2']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        自定义关键词1：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjc3]" placeholder="关键词1" value="<?php echo $config['weixin']['gjc3']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcm3]" placeholder="返回文字" value="<?php echo $config['weixin']['gjcm3']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjci3]" placeholder="返回图片" value="<?php echo $config['weixin']['gjci3']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcl3]" placeholder="返回链接" value="<?php echo $config['weixin']['gjcl3']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        自定义关键词1：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjc4]" placeholder="关键词1" value="<?php echo $config['weixin']['gjc4']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcm4]" placeholder="返回文字" value="<?php echo $config['weixin']['gjcm4']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjci4]" placeholder="返回图片" value="<?php echo $config['weixin']['gjci4']; ?>" class="layui-input">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="weixin[gjcl4]" placeholder="返回链接" value="<?php echo $config['weixin']['gjcl4']; ?>" class="layui-input">
                    </div>
                </div>

            </div>
            </div>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">

</script>

</body>
</html>