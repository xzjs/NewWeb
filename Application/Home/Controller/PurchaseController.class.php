<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/21
 * Time: 下午7:18
 */
namespace Home\Controller;

use Think\Controller;

class PurchaseController extends Controller
{
    public function add(){
        if(isset($_SESSION['user'])){
            $this->show();
        }else{
            $this->error('请登录',U('User/login'));
        }
    }

    /**
     * 添加采购
     */
    public function addx(){
        $Purchase=D('Purchase');
        $Purchase->create();
        $Purchase->user_id=$_SESSION['user']['id'];
        $result=$Purchase->add();
        if($result){
            $this->success('添加成功','index');
        }else{
            $this->error('添加失败');
        }
    }

    /**
     * 采购首页列表
     */
    public function index(){
        $this->assign('class2','active');
        $Purchase=D('Purchase');
        $purchaseList=$Purchase->relation(true)->select();
        $this->assign('list',$purchaseList);
        $this->show();
    }
}