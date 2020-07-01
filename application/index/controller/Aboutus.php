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
 * 前台品牌资质控制器
 * @package app\index\controller
 */
class Aboutus extends Home
{
    //在线留言
    public function message()
    {
        return view('',[]);
    }
    //保存留言
    public function save(Request $request){
        if($request->isPost()) {
            $param = $request->post();
            // 验证
            $validate = new MessageValidate();
            if(!$validate->check($param)){
                return ['code'=>0,'msg'=>$validate->getError()];
            }else{
                // 添加数据
                $param['ip'] = ip2long($_SERVER["REMOTE_ADDR"]);
                if(MessageModel::create($param)){
                    return json(['code'=>1,'msg'=>'申请成功']);
                }else{
                    return json(['code'=>0,'msg'=>'申请失败']);
                }
            }
        }
    }
    //品牌理念
    public function idea()
    {
        return view('',[]);
    }
}
