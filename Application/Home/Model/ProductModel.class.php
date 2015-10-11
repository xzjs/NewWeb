<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 15/10/11
 * Time: 下午10:07
 */
namespace Home\Model;
use Think\Model;
class ProductModel extends Model {
    protected $_link = array(
        'User'=> self::HAS_ONE,
    );
}