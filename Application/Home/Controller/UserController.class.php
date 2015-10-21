<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/21
 * Time: 下午7:42
 */
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    /**
     * 登录
     */
    public function loginx()
    {
        $User = D("User");
        $data = $User->where('email="' . I('post.email') . '" and pwd="' . md5(I('post.pwd')) . '"')->find();
        if ($data) {
            session('user',$data);
            $this->success('登录成功', __APP__);
        } else {
            $this->error('登录失败');
        }
    }

    /**
     * 注册
     */
    public function registerx()
    {
        $User = D("User");
        if (!$User->create()) {
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($User->getError());
        } else {
            // 验证通过 可以进行其他数据操作
            $User->add();
            $this->success('注册成功', "login");
        }
    }

    /**
     * 注销
     */
    public function logout(){
        session('user',null);
        $this->success('注销成功',__APP__);
    }
}