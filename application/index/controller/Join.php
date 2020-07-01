<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\admin\model\Message as MessageModel;
use app\index\validate\Message as MessageValidate;
use think\Request;

/**
 * 前台加盟指南控制器
 * @package app\index\controller
 */
class Join extends Home
{
    //加盟优势
    public function index()
    {
        return view('',[]);
    }
    //加盟流程
    public function process()
    {
        return view('',[]);
    }
}
