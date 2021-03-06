<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/21
 * Time: 下午8:32
 */
namespace Home\Model;

use Think\Model\RelationModel;

class PurchaseModel extends RelationModel
{
    protected $_auto = array(
        array('time','time',1,'function'),
    );

    protected $_link = array(
        'User'=>array(
            'mapping_type'  => self::BELONGS_TO,
            'as_fields' => 'name:username',
        ),
    );
}