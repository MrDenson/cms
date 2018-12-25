<?php
namespace app\common\model;
use think\Db;

class User extends Base
{
    // 设置数据表（不含前缀）
    protected $name = 'user';

    // 定义时间戳字段名
    protected $createTime = '';
    protected $updateTime = '';

    // 自动完成
    protected $auto = [];
    protected $insert = [];
    protected $update = [];

    public $_guest_group = 1;
    public $_def_group = 2;

    public function countData($where)
    {
        $total = $this->where($where)->count();
        return $total;
    }

    public function listData($where, $order, $page, $limit = 20)
    {
        $total = $this->where($where)->count();
        $list = Db::name('User')->where($where)->order($order)->page($page)->limit($limit)->select();
        return ['code' => 1, 'msg' => '数据列表', 'page' => $page, 'pagecount' => ceil($total / $limit), 'limit' => $limit, 'total' => $total, 'list' => $list];
    }

    public function infoData($where, $field = '*')
    {
        if (empty($where) || !is_array($where)) {
            return ['code' => 1001, 'msg' => '参数错误'];
        }
        $info = $this->field($field)->where($where)->find();
        if (empty($info)) {
            return ['code' => 1002, 'msg' => '获取数据失败'];
        }
        $info = $info->toArray();

        //用户组
        $group_list = model('Group')->getCache('group_list');
        $info['group'] = $group_list[$info['group_id']];


        $info['user_pwd'] = '';
        return ['code' => 1, 'msg' => '获取成功', 'info' => $info];
    }

    public function saveData($data)
    {
        $validate = \think\Loader::validate('User');

        if (isset($data['user_start_time']) && !is_numeric($data['user_start_time'])) {
            $data['user_start_time'] = strtotime($data['user_start_time']);
        }
        if (isset($data['user_start_time']) && !is_numeric($data['user_end_time'])) {
            $data['user_end_time'] = strtotime($data['user_end_time']);
        }

        if (!empty($data['user_id'])) {
            if (!$validate->scene('edit')->check($data)) {
                return ['code' => 1001, 'msg' => '参数错误：' . $validate->getError()];
            }

            if (empty($data['user_pwd'])) {
                unset($data['user_pwd']);
            } else {
                $data['user_pwd'] = md5($data['user_pwd']);
            }
            $where = [];
            $where['user_id'] = ['eq', $data['user_id']];
            $res = $this->where($where)->update($data);
        } else {
            if (!$validate->scene('edit')->check($data)) {
                return ['code' => 1002, 'msg' => '参数错误：' . $validate->getError()];
            }

            $data['user_pwd'] = md5($data['user_pwd']);
            $res = $this->insert($data);
        }
        if (false === $res) {
            return ['code' => 1003, 'msg' => '' . $this->getError()];
        }
        return ['code' => 1, 'msg' => '保存成功'];
    }

    public function delData($where)
    {
        $res = $this->where($where)->delete();
        if ($res === false) {
            return ['code' => 1001, 'msg' => '删除失败' . $this->getError()];
        }
        return ['code' => 1, 'msg' => '删除成功'];
    }

    public function fieldData($where, $col, $val)
    {
        if (!isset($col) || !isset($val)) {
            return ['code' => 1001, 'msg' => '参数错误'];
        }
        $data = [];
        $data[$col] = $val;
        $res = $this->where($where)->update($data);
        if ($res === false) {
            return ['code' => 1002, 'msg' => '设置失败' . $this->getError()];
        }
        return ['code' => 1, 'msg' => '设置成功'];
    }

    public function register($param)
    {
        $config = config('maccms');

        $data = [];
        $data['user_name'] = htmlspecialchars(urldecode(trim($param['user_name'])));
        $data['user_pwd'] = htmlspecialchars(urldecode(trim($param['user_pwd'])));
        $data['user_pwd2'] = htmlspecialchars(urldecode(trim($param['user_pwd2'])));
        $data['verify'] = $param['verify'];
        $uid = $param['uid'];


        if ($config['user']['status'] == 0 || $config['user']['reg_open'] == 0) {
            return ['code' => 1001, 'msg' => '未开放注册'];
        }
        if (empty($data['user_name']) || empty($data['user_pwd']) || empty($data['user_pwd2'])) {
            return ['code' => 1002, 'msg' => '请填写必填项'];
        }
        if (empty($param['user_openid_qq']) && empty($param['user_openid_weixin'])
            && !captcha_check($data['verify']) &&  $config['user']['reg_verify']==1) {
            return ['code' => 1003, 'msg' => '验证码错误'];
        }
        if ($data['user_pwd'] != $data['user_pwd2']) {
            return ['code' => 1004, 'msg' => '密码与确认密码不一致'];
        }
        $row = $this->where('user_name', $data['user_name'])->find();
        if (!empty($row)) {
            return ['code' => 1005, 'msg' => '用户名已被注册，请更换'];
        }
        if (!preg_match("/^[a-zA-Z\d]*$/i", $data['user_name'])) {
            return ['code' => 1006, 'msg' => '用户名只能包含字母和数字，请更换'];
        }

        $validate = \think\Loader::validate('User');
        if (!$validate->scene('add')->check($data)) {
            return ['code' => 1007, 'msg' => '参数错误：' . $validate->getError()];
        }

        $filter = $GLOBALS['config']['user']['filter_words'];
        if(!empty($filter)) {
            $filter_arr = explode(',', $filter);
            $f_name = str_replace($filter_arr, '', $data['user_name']);
            if ($f_name != $data['user_name']) {
                return ['code' => 1008, 'msg' => '用户名禁止包含：' . $filter . '等字符，请重试'];
            }
        }

        $fields = [];
        $fields['user_name'] = $data['user_name'];
        $fields['user_pwd'] = md5($data['user_pwd']);
        $fields['group_id'] = $this->_def_group;
        $fields['user_points'] = intval($config['user']['reg_points']);
        $fields['user_status'] = intval($config['user']['reg_status']);
        $fields['user_reg_time'] = time();
        $fields['user_openid_qq'] = (string)$param['user_openid_qq'];
        $fields['user_openid_weixin'] = (string)$param['user_openid_weixin'];

        if($config['user']['reg_phone_sms'] == '1'){
            $param['type'] = 3;
            $res = $this->check_msg($param);
            if($res['code'] >1){
                return ['code'=>$res['code'],'msg'=>$res['msg']];
            }
            $fields['user_phone'] = $param['to'];

            $update=[];
            $update['user_phone'] = '';
            $where2=[];
            $where2['user_phone'] = $param['to'];
            $this->where($where2)->update($update);
        }
        elseif($config['user']['reg_email_sms'] == '1'){
            $param['type'] = 3;
            $res = $this->check_msg($param);
            if($res['code'] >1){
                return ['code'=>$res['code'],'msg'=>$res['msg']];
            }
            $fields['user_email'] = $param['to'];

            $update=[];
            $update['user_email'] = '';
            $where2=[];
            $where2['user_email'] = $param['to'];
            $this->where($where2)->update($update);
        }

        $res = $this->insert($fields);
        if ($res === false) {
            return ['code' => 1010, 'msg' => '注册失败'];
        }

        $uid = intval($uid);
        if ($uid > 0 && $config['user']['invite_reg_points'] > 0) {
            $where = [];
            $where['user_id'] = $uid;
            $invite = $this->where($where)->find();
            if ($invite) {
                $update = [];
                $update['user_points'] = $invite['user_points'] + intval($config['user']['invite_reg_points']);
                $r = $this->where($where)->update($update);
            }
        }
        return ['code' => 1, 'msg' => '注册成功,请登录去会员中心完善个人信息'];
    }

    public function regcheck($t, $str)
    {
        $where = [];
        if ($t == 'user_name') {
            $where['user_name'] = $str;
            $row = $this->where($where)->find();
            if (!empty($row)) {
                return ['code' => 1001, 'msg' => '已注册'];
            }
        } elseif ($t == 'user_email') {
            $where['user_email'] = $str;
            $row = $this->where($where)->find();
            if (!empty($row)) {
                return ['code' => 1001, 'msg' => '已注册'];
            }
        } elseif ($t == 'verify') {
            if (!captcha_check($str)) {
                return ['code' => 1002, 'msg' => '验证码错误'];
            }
        }
        return ['code' => 1, 'msg' => '填写正确'];
    }

    public function info($param)
    {
        if (empty($param['user_pwd'])) {
            return ['code' => 1001, 'msg' => '请输入原密码'];
        }
        if (md5($param['user_pwd']) != $GLOBALS['user']['user_pwd']) {
            return ['code' => 1002, 'msg' => '原密码错误'];
        }
        if ($param['user_pwd1'] != $param['user_pwd2']) {
            return ['code' => 1003, 'msg' => '两次输入的新密码不一致'];
        }

        $data = [];
        $data['user_id'] = $GLOBALS['user']['user_id'];
        $data['user_name'] = $GLOBALS['user']['user_name'];
        $data['user_qq'] = htmlspecialchars(urldecode(trim($param['user_qq'])));
        $data['user_question'] = htmlspecialchars(urldecode(trim($param['user_question'])));
        $data['user_answer'] = htmlspecialchars(urldecode(trim($param['user_answer'])));
        if (!empty($param['user_pwd2'])) {
            $data['user_pwd'] = htmlspecialchars(urldecode(trim($param['user_pwd2'])));
        }
        return $this->saveData($data);
    }

    public function login($param)
    {
        $data = [];
        $data['user_name'] = htmlspecialchars(urldecode(trim($param['user_name'])));
        $data['user_pwd'] = htmlspecialchars(urldecode(trim($param['user_pwd'])));
        $data['verify'] = $param['verify'];
        $data['openid'] = $param['openid'];
        $data['col'] = $param['col'];

        if (empty($data['openid'])) {
            if (empty($data['user_name']) || empty($data['user_pwd'])) {
                return ['code' => 1001, 'msg' => '请填写必填项'];
            }

            if ($GLOBALS['config']['user']['login_verify'] ==1 && !captcha_check($data['verify'])) {
                return ['code' => 1002, 'msg' => '验证码错误'];
            }

            $pwd = md5($data['user_pwd']);
            $where = [];

            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if (!preg_match($pattern, $data['user_name'])) {
                $where['user_name'] = ['eq', $data['user_name']];
            } else {
                $where['user_email'] = ['eq', $data['user_name']];
            }

            $where['user_pwd'] = ['eq', $pwd];
        } else {
            if (empty($data['openid']) || empty($data['col'])) {
                return ['code' => 1001, 'msg' => '请填写必填项'];
            }
            $where[$data['col']] = $data['openid'];
        }
        $where['user_status'] = ['eq', 1];
        $row = $this->where($where)->find();

        if(empty($row)) {
            return ['code' => 1003, 'msg' => '查找用户信息失败'];
        }

        if($row['group_id'] > 2 &&  $row['user_end_time'] < time()) {
            $row['group_id'] = 2;
            $update['group_id'] = 2;
        }

        $random = md5(rand(10000000, 99999999));
        $ip = sprintf('%u',ip2long(request()->ip()));
        if($ip>2147483647){
            $ip=0;
        }
        $update['user_random'] = $random;
        $update['user_login_ip'] = $ip;
        $update['user_login_time'] = time();
        $update['user_login_num'] = $row['user_login_num'] + 1;
        $update['user_last_login_time'] = $row['user_login_time'];
        $update['user_last_login_ip'] = $row['user_login_ip'];

        $res = $this->where($where)->update($update);
        if ($res === false) {
            return ['code' => 1004, 'msg' => '更新登录信息失败'];
        }

        //用户组
        $group_list = model('Group')->getCache('group_list');
        $group = $group_list[$row['group_id']];

        cookie('user_id', $row['user_id'],['expire'=>2592000] );
        cookie('user_name', $row['user_name'],['expire'=>2592000] );
        cookie('group_id', $group['group_id'],['expire'=>2592000] );
        cookie('group_name', $group['group_name'],['expire'=>2592000] );
        cookie('user_check', md5($random . '-' . $row['user_id'] ),['expire'=>2592000] );
        cookie('user_portrait', mac_get_user_portrait($row['user_id']),['expire'=>2592000] );

        return ['code' => 1, 'msg' => '登录成功'];
    }

    public function logout()
    {
        cookie('user_id', null);
        cookie('user_name', null);
        cookie('group_id', null);
        cookie('group_name', null);
        cookie('user_check', null);
        cookie('user_portrait', null);
        return ['code' => 1, 'msg' => '退出成功'];
    }

    public function checkLogin()
    {
        $user_id = cookie('user_id');
        $user_name = cookie('user_name');
        $user_check = cookie('user_check');

        $user_id = htmlspecialchars(urldecode(trim($user_id)));
        $user_name = htmlspecialchars(urldecode(trim($user_name)));
        $user_check = htmlspecialchars(urldecode(trim($user_check)));

        if (empty($user_id) || empty($user_name) || empty($user_check)) {
            return ['code' => 1001, 'msg' => '未登录'];
        }

        $where = [];
        $where['user_id'] = $user_id;
        $where['user_name'] = $user_name;
        $where['user_status'] = 1;

        $info = $this->field('*')->where($where)->find();
        if(empty($info)) {
            return ['code' => 1002, 'msg' => '未登录'];
        }
        $info = $info->toArray();
        $login_check = md5($info['user_random'] . '-' . $info['user_id'] );
        if($login_check != $user_check) {
            return ['code' => 1003, 'msg' => '未登录'];
        }

        $group_list = model('Group')->getCache('group_list');
        $info['group'] = $group_list[$info['group_id']];

        //会员截止日期
        if ($info['group_id'] > 2 && $info['user_end_time'] < time()) {
            //用户组
            $info['group'] = $group_list[2];

            $update = [];
            $update['group_id'] = 2;

            $res = $this->where($where)->update($update);
            if($res === false){
                return ['code' => 1004, 'msg' => '更新会员截止日期失败'];
            }

            cookie('group_id', $info['group']['group_id'], ['expire'=>2592000] );
            cookie('group_name', $info['group']['group_name'],['expire'=>2592000] );
        }


        return ['code' => 1, 'msg' => '已登录', 'info' => $info];
    }

    public function promoter($data)
    {
        if (empty($data['uid'])) {
            return ['code' => 1001, 'msg' => '参数错误'];
        }

        $config = config('maccms.user');
        if ($config['market_status'] == 0) {
            return ['code' => 1002, 'msg' => '未开启推广积分'];
        }

        $where = [];
        $where['user_id'] = $data['uid'];
        $res = $this->infoData($where);
        if ($res['code'] > 1) {
            return $res;
        }

        $ip = sprintf('%u',ip2long(request()->ip()));
        if($ip>2147483647){
            $ip=0;
        }
        $where2 = [];
        $where2['user_id'] = $data['uid'];
        $where2['visit_ip'] = $ip;
        $where2['visit_time'] = ['gt', strtotime(date('Y-m-d'))];
        $cc = Db::name('visit')->where($where2)->count();
        if ($cc > 0) {
            return ['code' => 1003, 'msg' => '重复推广不积分'];
        }
        $where2['visit_time'] = time();
        Db::name('visit')->insert($where2);

        $info = $res['info'];
        $update['user_points'] = $info['user_points'] + $config['market'];
        $this->where($where)->update($update);

    }

    public function resetPwd()
    {

    }

    public function findpass($param)
    {
        $data = [];
        $data['user_name'] = htmlspecialchars(urldecode(trim($param['user_name'])));
        $data['user_question'] = htmlspecialchars(urldecode(trim($param['user_question'])));
        $data['user_answer'] = htmlspecialchars(urldecode(trim($param['user_answer'])));
        $data['user_pwd'] = htmlspecialchars(urldecode(trim($param['user_pwd'])));
        $data['user_pwd2'] = htmlspecialchars(urldecode(trim($param['user_pwd2'])));
        $data['verify'] = $param['verify'];

        if (empty($data['user_name']) || empty($data['user_question']) || empty($data['user_answer']) || empty($data['user_pwd']) || empty($data['user_pwd2']) || empty($data['verify'])) {
            return ['code' => 1001, 'msg' => '参数错误'];
        }

        if (!captcha_check($data['verify'])) {
            return ['code' => 1002, 'msg' => '验证码错误'];
        }

        if ($data['user_pwd'] != $data['user_pwd2']) {
            return ['code' => 1003, 'msg' => '二次密码不一致'];
        }


        $where = [];
        $where['user_name'] = $data['user_name'];
        $where['user_question'] = $data['user_question'];
        $where['user_answer'] = $data['user_answer'];

        $info = $this->where($where)->find();
        if (empty($info)) {
            return ['code' => 1004, 'msg' => '获取用户失败，账号、问题、答案可能不正确'];
        }

        $update = [];
        $update['user_pwd'] = md5($data['user_pwd']);

        $where = [];
        $where['user_id'] = $info['user_id'];
        $res = $this->where($where)->update($update);

        if (false === $res) {
            return ['code' => 1005, 'msg' => '' . $this->getError()];
        }
        return ['code' => 1, 'msg' => '密码找回成功成功'];

    }

    public function popedom($type_id, $popedom, $group_id = 1)
    {
        $group_list = model('Group')->getCache();
        $group_info = $group_list[$group_id];

        if (strpos(',' . $group_info['group_type'], ',' . $type_id . ',') !== false && !empty($group_info['group_popedom'][$type_id][$popedom]) !== false) {
            return true;
        }
        return false;
    }

    public function upgrade($param)
    {
        $group_id = intval($param['group_id']);
        $long = $param['long'];
        $points_long = ['day'=>86400,'week'=>86400*7,'month'=>86400*30,'year'=>86400*365];

        if (!array_key_exists($long, $points_long)) {
            return ['code'=>1001,'msg'=>'非法操作'];
        }

        if($group_id <3){
            return ['code'=>1002,'msg'=>'请选择自定义收费会员组'];
        }

        $group_list = model('Group')->getCache();
        $group_info = $group_list[$group_id];
        if(empty($group_info)){
            return ['code'=>1003,'msg'=>'获取会员组信息失败'];
        }

        if($group_info['group_status'] == 0){
            return ['code'=>1004,'msg'=>'会员组已经关闭，无法升级'];
        }

        $point = $group_info['group_points_'.$long];
        if($GLOBALS['user']['user_points'] < $point){
            return ['code'=>1005,'msg'=>'积分不够，无法升级'];
        }

        $sj = $points_long[$long];
        $end_time = time() + $sj;
        if($GLOBALS['user']['user_end_time'] > time() ){
            $end_time = $GLOBALS['user']['user_end_time'] + $sj;
        }

        $where = [];
        $where['user_id'] = $GLOBALS['user']['user_id'];

        $data = [];
        $data['user_points'] = $GLOBALS['user']['user_points'] - $point;
        $data['user_end_time'] = $end_time;
        $data['group_id'] = $group_id;

        $res = $this->where($where)->update($data);
        if($res===false){
            return ['code'=>1009,'msg'=>'升级会员组失败'];
        }

        cookie('group_id', $group_info['group_id'],['expire'=>2592000] );
        cookie('group_name', $group_info['group_name'],['expire'=>2592000] );

        return ['code'=>1,'msg'=>'升级会员组成功'];
    }

    public function check_msg($param)
    {
        $param['to'] = htmlspecialchars(urldecode(trim($param['to'])));
        $param['code'] = htmlspecialchars(urldecode(trim($param['code'])));
        if(!in_array($param['ac'],['email','phone']) || empty($param['to']) || empty($param['code']) || empty($param['type'])){
            return ['code'=>9001,'msg'=>'参数错误'];
        }
        //msg_type  1绑定2找回3注册
        $stime = strtotime('-5 min');
        $where=[];
        $where['user_id'] = $GLOBALS['user']['user_id'];
        $where['msg_time'] = ['gt',$stime];
        $where['msg_code'] = ['eq',$param['code']];
        $where['msg_type'] = ['eq', $param['type'] ];
        $res = model('msg')->infoData($where);
        if($res['code'] >1){
            return ['code'=>9002,'msg'=>'验证信息错误，请重试'];
        }
        return  ['code'=>1,'msg'=>'ok'];
    }

    public function send_msg($param)
    {
        $param['to'] = htmlspecialchars(urldecode(trim($param['to'])));
        $param['code'] = htmlspecialchars(urldecode(trim($param['code'])));


        if(!in_array($param['ac'],['email','phone']) || !in_array($param['type'],['1','2','3']) || empty($param['to'])  || empty($param['type'])){
            return ['code'=>9001,'msg'=>'参数错误'];
        }

        $type_arr = [
            1=>['des'=>'绑定','flag'=>'bind'],
            2=>['des'=>'找回密码','flag'=>'findpass'],
            3=>['des'=>'注册','flag'=>'reg'],
            ];

        $type_des = $type_arr[$param['type']]['des'];
        $type_flag = $type_arr[$param['type']]['flag'];


        $to = $param['to'];
        $code = mac_get_rndstr(6,'num');

        $sign = '【'.$GLOBALS['config']['site']['site_name'].'】';
        $r=0;

        $stime = strtotime('-5 min');
        $where=[];
        $where['user_id'] = $GLOBALS['user']['user_id'];
        $where['msg_time'] = ['gt',$stime];
        $where['msg_type'] = ['eq', $param['type'] ];
        $res = model('msg')->infoData($where);
        if($res['code'] ==1){
            return ['code'=>9002,'msg'=>'请不要频繁发送'];
        }
        $res_msg= ',请重试';
        if($param['ac']=='email'){
            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if(!preg_match( $pattern, $to)){
                return ['code'=>9003,'msg'=>'邮箱地址格式不正确'];
            }

            $title = '绑定'.$type_des.'验证';
            $msg = $sign.'的会员您好，'.$GLOBALS['user']['user_name'].'。'.$type_des.'验证码为：'. $code .',请在5分钟内完成验证。' ;
            $msg = str_replace(['[用户]','[类型]','[时长]','[验证码]'],[$GLOBALS['user']['user_name'],$type_des,'5',$code],$msg);

            $res_send = mac_send_mail($to, $sign.$title, $sign.$msg);
            if($res_send){
                $r=1;
            }
        }
        else{
            $pattern = "/^1{1}\d{10}$/";
            if(!preg_match($pattern,$to)){
                return ['code'=>9004,'msg'=>'手机号格式不正确'];
            }
            if(empty($GLOBALS['config']['sms']['type'])){
                return ['code'=>9005,'msg'=>'未配置短信发送服务'];
            }

            $msg = $GLOBALS['config']['sms']['content'];
            $msg = str_replace(['[用户]','[类型]','[时长]','[验证码]'],[$GLOBALS['user']['user_name'],$type_des,'5',$code],$msg);


            $res_send = Model('Sms'.$GLOBALS['config']['sms']['type'])->submit($to,$code,$type_flag,$type_des,$msg);
            if($res_send['code']==1){
                $r=1;
            }
            else{
                $res_msg = ','.$res_send['msg'];
            }
        }

        if($r==1){
            $data=[];
            $data['user_id'] = $GLOBALS['user']['user_id'];
            $data['msg_type'] = $param['type'];
            $data['msg_status'] = 0;
            $data['msg_to'] = $to;
            $data['msg_code'] = $code;
            $data['msg_content'] = $msg;
            $data['msg_time'] = time();
            $res = model('msg')->saveData($data);

            return ['code'=>1,'msg'=>'验证码发送成功，请前往查看'];
        }
        else{
            return ['code'=>9009,'msg'=>'验证码发送失败'.$res_msg];
        }
    }

    public function bind($param)
    {
        $param['type'] = 1;
        $res = $this->check_msg($param);
        if($res['code'] >1){
            return ['code'=>$res['code'],'msg'=>$res['msg']];
        }

        $update=[];
        if($param['ac']=='email') {
            $update['user_email'] = $param['to'];
        }
        else{
            $update['user_phone'] = $param['to'];
        }
        $where=[];
        $where['user_id'] = $GLOBALS['user']['user_id'];
        $res = $this->where($where)->update($update);
        if($res===false){
            return ['code'=>2003,'msg'=>'更新用户信息失败，请重试'];
        }
        return ['code'=>1,'msg'=>'绑定成功'];
    }

    public function unbind($param)
    {
        if(!in_array($param['ac'],['email','phone']) ){
            return ['code'=>2001,'msg'=>'参数错误'];
        }
        $col = 'user_email';
        if($param['ac']=='phone'){
            $col = 'user_phone';
        }
        $update=[];
        $update[$col] = '';
        $where=[];
        $where['user_id'] = $GLOBALS['user']['user_id'];
        $res = $this->where($where)->update($update);
        if($res===false){
            return ['code'=>2002,'msg'=>'更新用户信息失败，请重试'];
        }
        return ['code'=>1,'msg'=>'解绑成功'];
    }

    public function bindmsg($param)
    {
        $param['type'] = 1;
        return $this->send_msg($param);
    }

    public function findpass_msg($param)
    {
        $param['type'] = 2;
        return $this->send_msg($param);
    }

    public function reg_msg($param)
    {
        $param['type'] = 3;
        return $this->send_msg($param);
    }


    public function findpass_reset($param)
    {
        $to = htmlspecialchars(urldecode(trim($param['user_email'])));
        if(empty($to)){
            $to = htmlspecialchars(urldecode(trim($param['to'])));
        }

        $param['code'] = htmlspecialchars(urldecode(trim($param['code'])));
        $param['user_pwd'] = htmlspecialchars(urldecode(trim($param['user_pwd'])));
        $param['user_pwd2'] = htmlspecialchars(urldecode(trim($param['user_pwd2'])));

        if (strlen($param['user_pwd']) <6) {
            return ['code' => 2002, 'msg' => '密码最少6个字符'];
        }
        if ($param['user_pwd'] != $param['user_pwd2']) {
            return ['code' => 2003, 'msg' => '密码与确认密码不一致'];
        }

        $param['type'] = 2;
        $res = $this->check_msg($param);
        if($res['code'] >1){
            return ['code'=>$res['code'],'msg'=>$res['msg']];
        }

        if($param['ac']=='email') {

            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if(!preg_match( $pattern, $to)){
                return ['code'=>2005,'msg'=>'邮箱地址格式不正确'];
            }

            $where = [];
            $where['user_email'] = $to;
            $user = $this->where($where)->find();
            if (!$user) {
                return ['code' => 2006, 'msg' => '邮箱地址错误'];
            }
        }
        else{
            $pattern = "/^1{1}\d{10}$/";
            if(!preg_match($pattern,$to)){
                return ['code'=>2007,'msg'=>'手机号格式不正确'];
            }

            $where = [];
            $where['user_phone'] = $to;
            $user = $this->where($where)->find();
            if (!$user) {
                return ['code' => 2008, 'msg' => '手机号码错误'];
            }
        }

        $update=[];
        $update['user_pwd'] = md5($param['user_pwd']);

        $res = $this->where($where)->update($update);
        if($res===false){
            return ['code'=>2009,'msg'=>'修改免失败，请重试'];
        }
        return ['code'=>1,'msg'=>'密码重置成功'];
    }
}