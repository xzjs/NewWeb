<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
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
     * 登录
     */
    public function loginx()
    {
        $User = D("User");
        $data = $User->where('email="' . I('post.email') . '" and pwd="' . md5(I('post.pwd')) . '"')->find();
        if ($data) {
            $_SESSION['user'] = $data;
            $this->success('登录成功', __APP__);
        } else {
            $this->error('登录失败');
        }
    }

    /**
     * 注销
     */
    public function logout()
    {
        session_unset();
        session_destroy();
        $this->success('注销成功', __APP__);
    }

    /**
     * 增加商品
     */
    public function addx()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        $upload->saveName = 'time';
        $upload->autoSub  = false;
        // 上传文件
        $info = $upload->upload();
        $Support=D("Support");
        $Support->create();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $Support->photo=$info['photo']['savename'];
            $Support->add();
            $this->success('发布成功',"mysupport");
        }
    }

    /**
     * 我的供应
     */
    public function mysupport(){
        $Support=D("Support");
        $id=$_SESSION['user']['id'];
        $list=$Support->where('user_id='.$id)->select();
        $this->assign('list',$list);
        $this->show();
    }

    /**
     * 供应列表
     */
    public function support(){
        $Support=D("Support");
        $list=$Support->select();
        $this->assign('list',$list);
        $this->show();
    }

    /**
     * 公司
     */
    public function company(){
        $Company=D("Company");
        $data=$Company->where('user_id='.$_SESSION['user']['id'])->find();
        if(!$data){
            $data['name']='';
            $data['describe']='';
        }
        $this->assign('data',$data);
        $this->show();
    }

    /**
     * 修改公司
     */
    public function companyx(){
        $Company=D("Company");
        $Company->create();
        $Company->user_id=$_SESSION['user'][id];
        $result=false;
        if(isset($Company->id)){
            $result=$Company->save();
        }else{
            $result=$Company->add();
        }
        if($result){
            $this->success('更新成功','company');
        }else{
            $this->error('更新失败');
        }
    }

    public function detail($id){

    }
}