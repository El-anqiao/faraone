<?php
namespace Faraone\Models;
/**
 * Created by PhpStorm.
 * User: faraone
 * Date: 2017/9/19
 * Time: 下午11:11
 */
use Phalcon\Mvc\Model;
class Country extends Model
{
    public $id;
    public $name;
    public $iso_code;
    public $show_in_front;
    public $currency_code;
    public $area;

    public function initialize()
    {
        $this->useDynamicUpdate(true);
    }
}