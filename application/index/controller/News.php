<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\admin\model\News as NewsModel;

/**
 * 前台产品中心控制器
 * @package app\index\controller
 */
class News extends Home
{
    public function index()
    {
        $param = request()->param();
        if (array_key_exists('cat', $param) == true){
            $cat = $param['cat'];
        }else{
            $cat = 1;
        }
        if (array_key_exists('id', $param) == true){//详情
            $id = $param['id'];
            $details = NewsModel::where(['id'=>$id])
                ->field(['id','title','time','text'])
                ->find();
            //上一页数据
            $up = NewsModel::where([
                ['id','<',$id],
                ['pid','=',$cat],
            ])
                ->order('sort')
                ->field(['id','title'])
                ->find();
            if(empty($up)){
                $up = array(
                    'id'    => $id,
                    'title' => '没有上一篇了'
                );
            }
            //下一页数据
            $lo = NewsModel::where([
                ['id','>',$id],
                ['pid','=',$cat],
            ])
                ->order('sort')
                ->field(['id','title'])
                ->find();
            if(empty($lo)){
                $lo = array(
                    'id'    => $id,
                    'title' => '没有下一篇了'
                );
            }
            $this->assign(
                [
                    'details'  => $details,
                    'up'       => $up,
                    'lo'       => $lo,
                ]
            );
        }else{//列表
            //第几页
            $param = request()->param();
            $is_page = array_key_exists('page', $param);
            if($is_page == true){
                $page = $param['page'];
            }else{
                $page = 1;
            }
            $config = array(
                'page'     => $page,
                'query'    => ['cat'=>$cat],
            );
            $data = NewsModel::where(['pid'=>$cat,'status'=>1])
                ->field(['id','title'])
                ->order(['id','sort'])
                ->paginate(15,false,$config);
            $render = $data->render();
            $this->assign(
                [
                    'data'      => $data,
                    'render'    => $render,
                ]
            );
        }
        return view('',[
            'cat'      => $cat,
        ]);
    }
}
