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
            $this->success('发布成功',"index");
        }
    }
}