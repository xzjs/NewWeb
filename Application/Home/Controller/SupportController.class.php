<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/21
 * Time: 下午9:13
 */
namespace Home\Controller;

use Think\Controller;

class SupportController extends Controller
{
    /**
     * 供应列表
     */
    public function index(){
        $Support=D("Support");
        $list=$Support->select();
        $this->assign('list',$list);
        $this->assign('class3','active');
        $this->show();
    }

    /**
     * 商品详细
     * @param $id 商品id
     */
    public function detail($id){
        $Support=D("Support");
        $s=$Support->relation(true)->find($id);
        $this->assign('data',$s);
        $this->show();
    }
}