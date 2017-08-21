<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/21
 * Time: 10:09
 */
namespace app\admin\model;

use think\Model;
use think\Url;

class WeChat extends Model {
    public function getTypeLists() {
        $dataLists = [
            [
                'first' => [
                    'typename' => '微信粉丝管理',
                    'url' => Url::build('@admin/we_chat/goAction','typeid=1')
                ],
                'twice' => [
                    [
                        'id' => 11,
                        'typename' => '粉丝标签',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=11')
                    ],
                    [
                        'id' => 12,
                        'typename' => '已关注粉丝',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=12')
                    ],
                    [
                        'id' => 13,
                        'typename' => '粉丝黑名单',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=13')
                    ]
                ],
            ],
            [
                'first' => [
                    'typename' => '微信对接配置',
                    'url' => Url::build('@admin/we_chat/goAction','typeid=2')
                ],
                'twice' => [
                    [
                        'id' => 21,
                        'typename' => '微信接口配置',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=21')
                    ],
                    [
                        'id' => 22,
                        'typename' => '微信支付配置',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=22')
                    ]
                ],
            ],
            [
                'first' => [
                    'typename' => '微信定制',
                    'url' => Url::build('@admin/we_chat/goAction','typeid=3')
                ],
                'twice' => [
                    [
                        'id' => 31,
                        'typename' => '关键字管理',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=31')
                    ],
                    [
                        'id' => 32,
                        'typename' => '关注自动回复',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=32')
                    ],
                    [
                        'id' => 33,
                        'typename' => '无配置默认回复',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=33')
                    ],
                    [
                        'id' => 33,
                        'typename' => '微信菜单定制',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=33')
                    ]
                ],
            ],
            [
                'first' => [
                    'typename' => '素材资源管理',
                    'url' => Url::build('@admin/we_chat/goAction','typeid=4')
                ],
                'twice' => [
                    [
                        'id' => 41,
                        'typename' => '图文列表',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=41')
                    ],
                    [
                        'id' => 42,
                        'typename' => '添加图文',
                        'url' => Url::build('@admin/we_chat/goAction','typeid=42')
                    ]
                ],
            ]
        ];
        return $dataLists;
    }
}