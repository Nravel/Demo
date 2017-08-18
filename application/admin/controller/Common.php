<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/17
 * Time: 9:16
 */
namespace app\admin\controller {
    use think\Request;
    use think\Session;

//    公共控制器
    class Common extends  \think\Controller{
        protected $username;
        protected $status;
        public function __construct(Request $request = null){
            parent::__construct($request);
            if (!Session::get('username')) {
                $this->error('请先登录！','login/index','',1);
            }
            $this->username = Session::get('username');
            $this->status = Session::get('status');
            if(Session::get('status')){
                $this->error('请不要重复登录！','index','',1);
            }
        }
    }
}