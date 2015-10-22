<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/21
 * Time: 下午9:37
 */
namespace Home\Controller;

use Think\Controller;

class OrderController extends Controller
{
    /**
     * 添加订单
     */
    public function add(){
        $Order=D("Order");
        $Order->create();
        $Order->user_id=session('user')['id'];
        $result=$Order->add();
        if($result){
            $this->success('订购成功',U('Support/index'));
        }
        else{
            $this->error('订购失败');
        }
    }

    /**
     * 订单首页
     */
    public function index(){
        $Order=D("Order");
        $list=$Order->where('user_id='.$_SESSION['user']['id'])->relation(true)->select();
        $this->assign('list',$list);
        $this->show();
    }
}