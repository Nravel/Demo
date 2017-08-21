<?php
namespace app\admin\controller;

use think\Request;

class Index extends Common
{

    /**
     *   后台首页
     */
    public function  index() {
        $request = Request::instance();
        $type = $request->param('type',1);
        switch ($type) {
            case '1':
                $this->redirect('System/index',['type'=>$type]);
            break;
            case '2':
                $this->redirect('WeChat/index',['type'=>$type]);
            break;
        }

    }
}