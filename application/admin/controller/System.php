<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 15:52
 */
namespace app\admin\controller;

use think\Loader;
use think\Request;

class System extends Common {
    public function index() {
        $request = Request::instance();
//        获取后台操作类型
        if ($request->param('type')==1) {
            $systemModel = Loader::model('system');
            $dataLists = $systemModel->getTypeLists();
//            dump($dataLists);
            $data = $systemModel->getSystemInfo();
            return $this->fetch('index/index',['dataLists'=>$dataLists,'data'=>$data]);
        }
    }

    public function goAction() {
        $typeid = Request::instance()->param('typeid');
        if ($typeid==11) {
            $this->redirect('index',['type'=>1]);
        }else{
            $dataLists =  Loader::model('system')->getTypeLists();
            foreach ($dataLists as $datas) {
                foreach ($datas['twice'] as $twice) {
                    if ($twice['id']==$typeid) {
                        $typename = $twice['typename'];
                        return $this->fetch('system',['typename'=>$typename]);
                    }
                }
            }

        }
    }
}