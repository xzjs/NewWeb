<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    /**
     * 首页
     */
    public function index(){
        $this->assign('class1','active');
        $this->show();
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



    /**
     * 商品采购
     */
    public function buy(){

        $this->show();
    }
}