<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/9
 * Time: 下午8:51
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    protected $_validate = array(
        array('email','require','验证码必须！'), //默认情况下用正则进行验证
        array('email','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('pwd','pwd2','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
    );
    protected $_auto = array (
        array('pwd','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
    );
}