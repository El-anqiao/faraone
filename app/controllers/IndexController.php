<?php

use Beanbun\Beanbun;
use QL\QueryList;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
        set_time_limit(0);

        function callfun1($content,$key)
        {
            return '回调函数1：'.$key.'-'.$content;
        }

//获取采集对象
        $hj = QueryList::Query(
            'https://www.alexa.com/topsites/countries/IT'
            ,array(
            'title'=>array('.DescriptionCell p a','text'),
            'description'=>array('.DescriptionCell .description','text'),
            'link'=>array('.DescriptionCell p a','href'),
            'dail_time'=>array('.right:eq(2) p','text'),
                '.listings .site-listing'
        ));
        //$hj->setQuery(array('title'=>array('','text'),'url'=>array('a','href')),'#con_two_2 li');
//输出结果：二维关联数组
        print_r($hj->data);die;

    }

}

