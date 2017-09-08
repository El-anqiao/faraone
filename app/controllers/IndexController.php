<?php


use QL\QueryList;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
//获取采集对象
        $hj = QueryList::Query('https://www.alexa.com/topsites/countries',array(
            'title'=>array('.countries li a','text'),
            'link'=>array('.countries li a','href')
        ));
//输出结果：二维关联数组
        print_r($hj->data);die;


    }

}

