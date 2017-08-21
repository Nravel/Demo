<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/21
 * Time: 10:07
 */
namespace app\admin\controller;
use think\Request;
use think\Loader;

class WeChat extends Common {
    public function index() {
        $request = Request::instance();
        $type = $request->param('type');
//        获取后台操作类型
        if ($type==2) {
            $systemModel = Loader::model('WeChat','model');
            $dataLists = $systemModel->getTypeLists();
//            dump($dataLists);
            return $this->fetch('we_chat',['dataLists'=>$dataLists,'topname'=>'微信粉丝管理','typename'=>'粉丝标签','type'=>$type]);
        }
    }

    public function goAction() {
        $typeid = Request::instance()->param('typeid');
        if ($typeid==11) {
            $this->redirect('index',['type'=>2]);
        }else{
            $dataLists =  Loader::model('WeChat','model')->getTypeLists();
            foreach ($dataLists as $datas) {
                foreach ($datas['twice'] as $twice) {
                    if ($twice['id']==$typeid) {
                        $typename = $twice['typename'];
                        return $this->fetch('we_chat',['typename'=>$typename,'topname'=>$datas['first']['typename'],'dataLists'=>$dataLists,'type'=>2]);
                    }
                }
            }
        }
    }
}