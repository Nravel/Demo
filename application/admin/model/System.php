<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/19
 * Time: 15:32
 */
namespace app\admin\model;

use think\Model;
use think\Url;

//测试数据

class System extends Model {
    private $think_version = '1.00 dev';
    private $option_system = 'Win7';
    private $php_version = '7.0.14';
    private $mysql_version = '5.6.29-log';
    public function getSystemInfo() {
        $data = [
            'think_version' => $this->think_version,
            'option_system' => $this->option_system,
            'php_version' => $this->php_version,
            'mysql_version' => $this->mysql_version
        ];
        return $data;
    }

    public function getTypeLists() {
        $dataLists = [
             [
                'first' => [
                    'typename' => '系统配置',
                    'url' => Url::build('@admin/system/goAction','typeid=1')
                ],
                'twice' => [
                    [
                        'id' => 11,
                        'typename' => '后台首页',
                        'url' => Url::build('@admin/system/goAction','typeid=11')
                    ],
                    [
                        'id' => 12,
                        'typename' => '配置选项1',
                        'url' => Url::build('@admin/system/goAction','typeid=12')
                    ],
                    [
                        'id' => 13,
                        'typename' => '配置选项2',
                        'url' => Url::build('@admin/system/goAction','typeid=13')
                    ]
                ],
            ],
            [
                'first' => [
                    'typename' => '系统权限',
                    'url' => Url::build('@admin/system/goAction','typeid=2')
                ],
                'twice' => [
                    [
                        'id' => 21,
                        'typename' => '权限选项1',
                        'url' => Url::build('@admin/system/goAction','typeid=21')
                    ],
                    [
                        'id' => 22,
                        'typename' => '权限选项2',
                        'url' => Url::build('@admin/system/goAction','typeid=22')
                    ],
                    [
                        'id' => 23,
                        'typename' => '权限选项3',
                        'url' => Url::build('@admin/system/goAction','typeid=23')
                    ]
                ],
            ],
            [
                'first' => [
                    'typename' => '系统日志',
                    'url' => Url::build('@admin/system/goAction','typeid=3')
                ],
                'twice' => [
                    [
                        'id' => 31,
                        'typename' => '日志选项1',
                        'url' => Url::build('@admin/system/goAction','typeid=31')
                    ],
                    [
                        'id' => 32,
                        'typename' => '日志选项2',
                        'url' => Url::build('@admin/system/goAction','typeid=32')
                    ],
                    [
                        'id' => 33,
                        'typename' => '日志选项3',
                        'url' => Url::build('@admin/system/goAction','typeid=33')
                    ]
                ],
            ],
        ];
        return $dataLists;
    }
}