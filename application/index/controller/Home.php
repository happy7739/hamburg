<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\common\controller\Common;
use app\admin\model\Configuration as ConfigurationModel;
use app\admin\model\Navigation as NavigationModel;
use app\admin\model\Page as PageModel;
use app\admin\model\PageImg as PageImgModel;

/**
 * 前台公共控制器
 * @package app\index\controller
 */
class Home extends Common
{
    public function __construct()
    {
        parent::__construct();
        //action class
        $path = request()->path();
        if($path == ''){
            $path = "index/index/index";
        }
        $param = request()->param();
        $is_cat = array_key_exists('cat', $param);
        $nav_pid = 1;
        $nav_id = 0;
        $title = '汉堡|成都汉堡加盟|四川汉堡加盟|西式快餐加盟|汉堡连锁店';
        if($is_cat == true){
            $str = 'cat='.$param['cat'];
            $nav_p = NavigationModel::where(['url_value'=>$path])
                ->where('pid','<>',0)
                ->where("find_in_set('$str',params)")
                ->field(['id','pid','title'])
                ->find();
            if($nav_p == NULL){
                $nav_f = NavigationModel::where(['url_value'=>$path])
                    ->where('pid','=',0)
                    ->field(['id','title'])
                    ->find();
                if($nav_f !== NULL){
                    $nav_pid = $nav_f['id'];
                    $title = $nav_f['title'];
                }
            }else{
                $nav_pid = $nav_p['pid'];
                $nav_id = $nav_p['id'];
                $title = $nav_p['title'];
            }
        }else{
            $nav_p = NavigationModel::where(['url_value'=>$path])
                ->where('pid','<>',0)
                ->field(['id','pid','title'])
                ->find();
            if($nav_p == NULL){
                $nav_f = NavigationModel::where(['url_value'=>$path])
                    ->where('pid','=',0)
                    ->field(['id','title'])
                    ->find();
                if($nav_f !== NULL){
                    $nav_pid = $nav_f['id'];
                    $title = $nav_f['title'];
                }
            }else{
                $nav_pid = $nav_p['pid'];
                $nav_id = $nav_p['id'];
                $title = $nav_p['title'];
            }
        }
        $menu = NavigationModel::where(['pid'=>$nav_pid])
            //->where('pid','<>',0)
            ->field(['id','title','korean','url_value','params'])
            ->order('sort')
            ->select();
        $page_img = PageImgModel::where("find_in_set('$nav_id',pid)")
            ->field(['id','alt','title','img'])
            ->order('sort')
            ->find();
        if ($page_img !== NULL){
            $this->assign('n_img',$page_img);
        }
        $this->assign(
            [
                'title'             => $title,
                'config'            => $this->configuration(),
                'nav'               => $this->nav(),
                'menu'              => $menu,
                'nav_pid'           => $nav_pid,
                'nav_id'            => $nav_id
            ]
        );
    }
    /**
     * 初始化方法
     * @author 蔡伟明 <314013107@qq.com>
     */
    protected function initialize()
    {
        // 系统开关
        if (!config('web_site_status')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
    }
    //查询基本配置数据
    public function configuration(){
        return ConfigurationModel::where('id', 1)->find();
    }
    //导航栏
    public function nav(){
        $data = NavigationModel::where(['pid'=>0,'status'=>1])
            ->field(['id','title','korean','url_value','params'])
            ->order('sort')
            ->select();
        foreach ($data as $key => &$val) {
            $val['arr'] = NavigationModel::where(['pid'=>$val['id'],'status'=>1])
                ->field(['id','title','korean','url_value','params'])
                ->order('sort')
                ->select();
        }
        return $data;
    }
    //单页详情
    public function details($cat)
    {
        $data = PageModel::where(['id'=>$cat])->find();
        return view('public/details',['data'=>$data]);
    }
}
