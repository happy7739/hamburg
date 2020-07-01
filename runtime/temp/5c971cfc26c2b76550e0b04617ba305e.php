<?php /*a:5:{s:60:"F:\Project\hamburg\application\index\view\product\index.html";i:1591259134;s:58:"F:\Project\hamburg\application\index\view\public\base.html";i:1591259291;s:60:"F:\Project\hamburg\application\index\view\public\header.html";i:1591087968;s:58:"F:\Project\hamburg\application\index\view\public\menu.html";i:1590991790;s:60:"F:\Project\hamburg\application\index\view\public\footer.html";i:1591087968;}*/ ?>
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
    
<style>
    .case_page{width: 750px!important;}
    .case_page ul li{font-size: 20px!important;}
    .case_page ul li:first-child{width: 65px!important;}
    .case_page ul li:last-child{width: 65px!important;}
    .case_page{
        width: 1200px;
        height: 25px;
        margin:30px auto;
    }
    .case_page ul{
        display:table;
        text-align:center;
        margin:0 auto;
    }
    .case_page ul li{
        width: 23px;
        height: 23px;
        float: left;
        margin-left: 14px;
        font-size: 14px;
        text-align: center;
    }
    .case_page ul li a{color: #999999;}
    .case_page ul li:first-child{
        width: 45px;
        height: 25px;
    }
    .case_page ul li:last-child{
        width: 45px;
        height: 25px;
    }
</style>

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

<!--===================列表===================-->
<?php if(!(empty($data) || (($data instanceof \think\Collection || $data instanceof \think\Paginator ) && $data->isEmpty()))): ?>
<div style="height: 25px;">
</div>
<div class="lr_juzhong">
    <div class="tupian">
        <img alt="汉堡产品" src="/static/index/image/qbcd.jpg" />
    </div>
    <div style="height: 112px;">
    </div>
    <div class="zhuti">
        <ul class="msul">
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <li>
                <div class="wrap">
                    <a href="<?php echo url('index/product/index'); ?>?cat=<?php echo htmlentities($cat); ?>&id=<?php echo htmlentities($val['id']); ?>">
                        <img width="345" height="213" src="<?php echo htmlentities(get_file_path($val['img'])); ?>
" alt="<?php echo htmlentities($val['title']); ?>">
                        <i></i>
                        <p>
                            <b><?php echo htmlentities($val['title']); ?></b>
                            <span>乐享汉堡炸鸡店加盟<br><?php echo htmlentities($val['desc']); ?></span>
                        </p>
                    </a>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- 分页 -->
        <div class="case_page">
            <?php echo $render; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<!--===================详情===================-->
<?php if(!(empty($details) || (($details instanceof \think\Collection || $details instanceof \think\Paginator ) && $details->isEmpty()))): ?>
<div class="eng">
    <h1><?php echo htmlentities($details['title']); ?></h1>
    <div class="eng-text">
        &nbsp;&nbsp; 发布:<?php echo htmlentities($details['time']); ?>&nbsp;&nbsp;
    </div>
    <div class="engti" title="文字内容">
        <?php echo $details['text']; ?>
    </div>
    <div style="height: 1px; width: 850px; margin: 0 auto 10px auto; background: #000;">
    </div>
    <div class="eng_shan">
        上一篇：
        <?php if(!(empty($up) || (($up instanceof \think\Collection || $up instanceof \think\Paginator ) && $up->isEmpty()))): ?>
        <a href="<?php echo url('index/product/index'); ?>?cat=<?php echo htmlentities($cat); ?>&id=<?php echo htmlentities($up['id']); ?>"><?php echo htmlentities($up['title']); ?></a>
        <?php endif; ?>
    </div>
    <div class="eng_shan">
        下一篇：
        <?php if(!(empty($lo) || (($lo instanceof \think\Collection || $lo instanceof \think\Paginator ) && $lo->isEmpty()))): ?>
        <a href="<?php echo url('index/product/index'); ?>?cat=<?php echo htmlentities($cat); ?>&id=<?php echo htmlentities($lo['id']); ?>"><?php echo htmlentities($lo['title']); ?></a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

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