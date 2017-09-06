<?php

use Beanbun\Beanbun;
class IndexController extends ControllerBase
{

    public function indexAction()
    {


        $beanbun = new Beanbun;
        $beanbun->seed = [
            'http://www.950d.com/',
            'http://www.950d.com/list-1.html',
            'http://www.950d.com/list-2.html',
        ];
        $beanbun->afterDownloadPage = function($beanbun) {
            file_put_contents(__DIR__ . '/' . md5($beanbun->url), $beanbun->page);
        };
        $beanbun->start();

    }

}

