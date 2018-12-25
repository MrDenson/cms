<?php
//000000003600
 exit();?>
s:3796:"    <!--评论开始-->
    <form class="comment_form cmt_form clearfix"  >
        <input type="hidden" name="comment_pid" value="0">
        <!--评论框-->
        <div class="input_wrap fl clearfix">
            <textarea class="comment_content fl" name="comment_content" placeholder="有事没事说两句..."></textarea>
            <div class="fl clearfix handle">
                <div class="comment_face_panel face">
                    <i class="icon-face"></i>
                </div>
                <div class="comment_face_box face-box">
                                        <img data-id="1" src="/static/images/face/1.gif">
                                        <img data-id="2" src="/static/images/face/2.gif">
                                        <img data-id="3" src="/static/images/face/3.gif">
                                        <img data-id="4" src="/static/images/face/4.gif">
                                        <img data-id="5" src="/static/images/face/5.gif">
                                        <img data-id="6" src="/static/images/face/6.gif">
                                        <img data-id="7" src="/static/images/face/7.gif">
                                        <img data-id="8" src="/static/images/face/8.gif">
                                        <img data-id="9" src="/static/images/face/9.gif">
                                        <img data-id="10" src="/static/images/face/10.gif">
                                        <img data-id="11" src="/static/images/face/11.gif">
                                        <img data-id="12" src="/static/images/face/12.gif">
                                        <img data-id="13" src="/static/images/face/13.gif">
                                        <img data-id="14" src="/static/images/face/14.gif">
                                        <img data-id="15" src="/static/images/face/15.gif">
                                        <img data-id="16" src="/static/images/face/16.gif">
                                    </div>
                <div class="remaining-w">还可以输入<span class="comment_remaining remaining fr" >200</span></div>
                <div class="smt fr clearfix">
                        <span style="display: none;">
                            <span></span>
                        </span>
                                        验证码:<input class="mac_verify cmt_text" type="text" id="verify" name="verify" />
                                        <input class="comment_submit cmt_post" type="button" value="发布">
                </div>
            </div>
        </div>

    </form>
        <div class="cmt_wrap" >
            <p class="smt_wrap fl clearfix">
                <span class="total fl">共<em id="item_count">0</em>条评论</span>
            </p>
            
        </div>
    <!--评论结束-->
   
        <div class="page_tip">共0条数据,当前/页</div>
        <div class="page_info">
            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show(1)" title="首页">首页</a>
            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show({'$__PAGING__.page_prev}')" title="上一页">上一页</a>
                        <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('')" title="下一页">下一页</a>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('')" title="尾页">尾页</a>

            <input class="page_input" type="text" placeholder="页码" id="page" autocomplete="off" style="width:40px">
            <button class="page_btn" type="button"  onclick="MAC.Comment.Show($('#page').val())">GO</button>
        </div>
    
";