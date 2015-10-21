<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/21
 * Time: 下午9:22
 */
namespace Home\Model;

use Think\Model\RelationModel;

class SupportModel extends RelationModel
{
    protected $_link = array(
        'User'=>array(
            'mapping_type'  => self::BELONGS_TO,
            'as_fields' => 'name:username',
        ),
    );
}