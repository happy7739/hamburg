<?php /*a:5:{s:62:"F:\Project\hamburg\application\index\view\aboutus\message.html";i:1591259134;s:58:"F:\Project\hamburg\application\index\view\public\base.html";i:1591259291;s:60:"F:\Project\hamburg\application\index\view\public\header.html";i:1591087968;s:58:"F:\Project\hamburg\application\index\view\public\menu.html";i:1590991790;s:60:"F:\Project\hamburg\application\index\view\public\footer.html";i:1591087968;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo htmlentities($title); ?></title>
    <!-- 公共样式和JS -->
    <link rel="shortcut icon" href="/static/index/image/logo.ico" />
    <link href="/static/index/css/index.css" rel="stylesheet" type="text/css" />
    <script src="/static/index/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/static/index/js/cu.js" type="text/javascript"></script>
    <script src="/static/index/js/click.js" type="text/javascript"></script>
    <!--终端判断-->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?df73c308692c42e8633d774bf43c1c54";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- 当前页面的样式及JS -->
    
<script src="/static/index/js/jquery.form.js"></script>
<script src="/static/index/js/layer/layer.js"></script>

</head>
<body>

<!--头部-->
<div style="background-color: #F5CB1F; width: 100%; position: relative;" class="over_top">
    <div style="margin: 0 auto; width: 950px; height: 180px;">
        <div style="float: left; width: 500px;">
            <a href="/" title="汉堡logo">
                <img src="<?php echo htmlentities(get_file_path($config['logo'])); ?>" alt="汉堡店加盟_logo" /></a>
        </div>
        <div style="float: left; width: 450px;">
            <div style="width: 450px; text-align: right;">
                <img src="/static/index/image/phone.png" alt="汉堡店加盟_加盟热线" title="加盟热线" /></div>
            <div style="width: 450px; text-align: right; font-size: 26px; color: #000;">
                400-1080-517</div>
            <div style="width: 450px; text-align: right;">
                <img src="/static/index/image/menu.png" alt="汉堡店加盟_菜单" title="菜单" /></div>
        </div>
    </div>
</div>
<!--导航栏-->
<div id="nav" class="nav">
    <ul>
        <?php if(!(empty($nav) || (($nav instanceof \think\Collection || $nav instanceof \think\Paginator ) && $nav->isEmpty()))): ?>
        <div class="n"></div>
        <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <li class='' id="active_<?php echo htmlentities($val['id']); ?>">
            <a style="width: 116px;" href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>">
                <?php echo htmlentities($val['korean']); ?><span><?php echo htmlentities($val['title']); ?></span>
            </a>
            <div class="n"></div>
            <?php if(!(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty()))): ?>
            <ul>
                <?php if(is_array($val['arr']) || $val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo url($v['url_value']); if($v['params'] != ''): ?>?<?php echo htmlentities($v['params']); ?><?php endif; ?>"><?php echo htmlentities($v['title']); ?></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <li class="t"></li>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
    </ul>
</div>
<script>
    window.onload =function() {
        var nav_pid =  "<?php echo htmlentities($nav_pid); ?>";
        var nav_id =  "<?php echo htmlentities($nav_id); ?>";
        var str1 = '#active_' + nav_pid;
        console.log(nav_pid);
        $(str1).addClass('active-show');
        if (nav_id != 0){
            console.log(nav_id);
            var str2 = '#tebs_' + nav_id;
            $(str2).addClass('active-show');
        }
    }
</script>

<!-----主图----->
<div class="men_zhu">
    <ul>
        <li>
        
            <?php if(empty($n_img) || (($n_img instanceof \think\Collection || $n_img instanceof \think\Paginator ) && $n_img->isEmpty())): ?>
            <img src="/static/index/image/banner.jpg" alt="乐享汉堡" title="乐享汉堡" />
            <?php endif; if(!(empty($n_img) || (($n_img instanceof \think\Collection || $n_img instanceof \think\Paginator ) && $n_img->isEmpty()))): ?>
            <img src="<?php echo htmlentities(get_file_path($n_img['img'])); ?>" alt="<?php echo htmlentities($n_img['alt']); ?>" title="<?php echo htmlentities($n_img['title']); ?>" />
            <?php endif; ?>
        
        </li>
    </ul>
</div>
<!-----子导航----->
<!-----子导航----->
<div id="menu">
    <?php if(!(empty($menu) || (($menu instanceof \think\Collection || $menu instanceof \think\Paginator ) && $menu->isEmpty()))): ?>
    <ul>
        <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <li class="" id="tebs_<?php echo htmlentities($val['id']); ?>">
            <a href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>" title="<?php echo htmlentities($val['title']); ?>"><?php echo htmlentities($val['title']); ?></a>
            <a href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>" title="<?php echo htmlentities($val['korean']); ?>"><?php echo htmlentities($val['korean']); ?></a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php endif; ?>
</div>
<!--主体-->

<!-----主体----->
<div style="height: 25px;">
</div>
<div class="lr_juzhong">
    <form id="addForm" action="<?php echo url('index/Aboutus/save'); ?>" method="post">
        <?php echo token(); ?>
        <div class="liuyan">
            <table>
                <tr>
                    <td class="bt">
                        姓名
                    </td>
                    <td class="xm">
                        <input name="name" maxlength="20" type="text" class="in" id="name"/>
                        <span>*</span>
                    </td>
                </tr>
                <tr>
                    <td class="bt">
                        手机
                    </td>
                    <td class="xm">
                        <input name="mobile" id="mobile" maxlength="11" type="number" class="in" />
                        <span>*</span>
                    </td>
                </tr>
                <tr>
                    <td class="bt">
                        性别
                    </td>
                    <td class="xm">
                        <label for="xs">
                            先生
                            <input type="radio" name="sex" value="0" checked="checked" id="xs" />
                        </label>
                        <label for="ns">
                            女士
                            <input type="radio" name="sex" value="1" id="ns" />
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="bt">
                        微信号
                    </td>
                    <td class="xm">
                        <input name="wx" maxlength="30" type="text" class="in" />
                    </td>
                </tr>
                <tr>
                    <td class="bt">
                        QQ
                    </td>
                    <td class="xm">
                        <input name="qq" maxlength="20" type="text" class="in" />
                    </td>
                </tr>
                <tr>
                    <td class="bt">
                        留言
                    </td>
                    <td class="xm">
                        <textarea name="content" maxlength="500"></textarea>
                        <span>*</span>
                    </td>
                </tr>
            </table>
            <div class="anniu">
                <button class="tj" type="submit">提 交</button>
                <button class="cz" type="reset">重 置</button>
            </div>
        </div>
    </form>
</div>

<script>
    /*<====================================表单提交==========================================>*/
    $('#addForm').ajaxForm({
        //前端验证
        beforeSubmit:function () {
            if($.trim($('#name').val()) == ''){
                layer.msg('姓名不能为空',{icon: 5,time:1500,shade:0.5});
                return false;
            }
            if($.trim($('#mobile').val()) == ''){
                layer.msg('电话不能为空',{icon: 5,time:1500,shade:0.5});
                return false;
            }
        },
        //提交到后台后，和后台进行交互 ，处理结果
        success:function (res){
            //console.log(res);
            if(res.code == 1){
                layer.alert('我们会尽快联系你的，请保持手机畅通！', {
                    icon: 1,    //图标
                    title:res.msg,  //标题
                    closeBtn: 1,    // 是否显示关闭按钮
                    anim: 4, //动画类型
                    move: false,//是否可以拖动，默认可以拖动
                    yes:function(){     //确定按钮
                        history.go(0);
                    },
                    cancel: function(){     // 右上角关闭按钮的点击事件
                        history.go(0);
                    }
                });
            }else{
                layer.alert('请稍后再试！', {
                    icon: 5,    //图标
                    title:res.msg,  //标题
                    closeBtn: 1,    // 是否显示关闭按钮
                    anim: 4, //动画类型
                    move: false,//是否可以拖动，默认可以拖动
                    yes:function(){     //确定按钮
                        history.go(0);
                    },
                    cancel: function(){     // 右上角关闭按钮的点击事件
                        history.go(0);
                    }
                });
            }
        },

        //其他错误信息
        error:function () {
            layer.msg("非法操作",{icon: 5,time:1500,shade:0.5});
            return false;
        },
    })
</script>

<!--底部-->
<!--底部-->
<div class="bottom-yellow">
    <div class="yellow-whole">
        <div class="yellow-left">
            <div style="font-size: 24px; font-weight: bold;">
                成都餐协旗下品牌</div>
            <div>
                <img alt="" src="<?php echo htmlentities(get_file_path($config['logo'])); ?>" /></div>
            <div>
                <img alt="" src="/static/index/image/phone-num.png" /></div>
        </div>
        <div class="yellow-right">
            <div>
                <img src="<?php echo htmlentities(get_file_path($config['wx_img'])); ?>" alt="" title="" />&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="<?php echo htmlentities(get_file_path($config['wb_img'])); ?>" alt="" title="" />
            </div>
            &nbsp;
            <div>
                咨询热线：<?php echo htmlentities($config['tel']); ?><br />
                客服热线：<?php echo htmlentities($config['mobile']); ?><br />
                公司地址：<?php echo htmlentities($config['address']); ?><br />
                品牌所有：成都餐协餐饮管理有限公司<br />
                投资有风险，选择需谨慎</div>
        </div>
        <div class="yellow-lian">
            友情链接： <a href="http://www.1zhichan.com/">烤肉加盟</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://www.cdzhibaoyu.com/">纸包鱼加盟</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="yellow-copy">
            Copyright © 2017 成都餐协餐饮管理有限公司  <a href="http://www.beian.miit.gov.cn/" style="color:#000000;">蜀ICP备12020698号-7</a></div>
    </div>
</div>
<!--底部结束-->
﻿<script type="text/jscript" language="javascript">
    $(document).ready(function($){
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
            //duration of the top scrolling animation (in ms)
            scroll_top_duration = 700,
            //grab the "back to top" link
            $back_to_top = $('#top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('cd-fade-out');
            }
        });
        //www.sucaijiayuan.com
        //smooth scroll to top
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0 ,
                }, scroll_top_duration
            );
        });

    });
</script>
<!--回顶部与其他信息-->
<div class="toolbar">
    <a target="_blank" href="http://www2.53kf.com/webCompany.php?arg=10132959&style=10" class="toolbar-item toolbar-item-feedback"></a><a target="_blank"
                                                                                                                                          href="http://wpa.qq.com/msgrd?v=3&uin=1434414081&site=qq&menu=yes" class="toolbar-item toolbar-item-feedback1">
</a><a href="#" class="toolbar-item toolbar-item-weixin"><span class="toolbar-layer">
        </span></a><a href="#" id="top" class="toolbar-item toolbar-item-top"></a>
</div>
<script>
    (function() {
        var _53code = document.createElement("script");
        _53code.src = "//tb.53kf.com/code/code/10132959/10";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(_53code, s);
    })();
</script>
<!--其他模块-->

</body>
</html>