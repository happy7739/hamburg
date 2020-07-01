<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\admin\model\Card as CardModel;
use app\admin\model\Roll as RollModel;
use app\admin\model\News as NewsModel;
use app\admin\model\Store as StoreModel;
use app\admin\model\Banner as BannerModel;

/**
 * 前台首页控制器
 * @package app\index\controller
 */
class Index extends Home
{
    public function index()
    {
        // 默认跳转模块
        if (config('home_default_module') != '' && config('home_default_module') != 'index') {
            $this->redirect(config('home_default_module'). '/index/index');
        }
        $banner = BannerModel::where(['status'=>1])
            ->field(['id','title','alt','img'])
            ->order('sort')
            ->limit(15)
            ->select();
        $roll = RollModel::where(['status'=>1])
            ->field(['id','title','alt','img'])
            ->order('sort')
            ->limit(15)
            ->select();
        $news = NewsModel::where(['status'=>1,'is_tui'=>1])
            ->field(['id','pid','title','time'])
            ->order('sort')
            ->limit(15)
            ->select();
        $store = StoreModel::where(['status'=>1,'is_tui'=>1])
            ->field(['id','pid','title','img'])
            ->order('sort')
            ->limit(15)
            ->select();
        $card = CardModel::where(['status'=>1])
            ->field(['id','title','alt','img'])
            ->order('sort')
            ->limit(3)
            ->select();
        return view('',[
            'banner'    => $banner,
            'roll'      => $roll,
            'news'      => $news,
            'store'     => $store,
            'card'      => $card
        ]);
    }
}
