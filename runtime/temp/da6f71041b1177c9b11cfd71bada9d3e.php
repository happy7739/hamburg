<?php /*a:5:{s:57:"F:\Project\hamburg\application\index\view\join\index.html";i:1591259133;s:58:"F:\Project\hamburg\application\index\view\public\base.html";i:1591259291;s:60:"F:\Project\hamburg\application\index\view\public\header.html";i:1591087968;s:58:"F:\Project\hamburg\application\index\view\public\menu.html";i:1590991790;s:60:"F:\Project\hamburg\application\index\view\public\footer.html";i:1591087968;}*/ ?>
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

<div style="height: 25px;">
</div>
<div class="lr_juzhong">

    <div class="jmyszhuti">
        <div class="jia_quanbu_text1">
            汉堡店加盟商可分享汉堡作为行业内知名品牌所带来的知名度和美誉度。拥有汉堡快速增长的客户群及粉丝群，从而提高品牌竞争力，使各汉堡店加盟商在西式快餐市场上并不是孤军奋斗，而且团体合作。
        </div>
        <div class="jia_quanbu_text2">
            公司拥有着来自美国的强大的专业产品研发团队，定期推出新产品，确保产品的味道优质。90%的原料由总部统一配送，确保品牌味道统一，真正西式快餐品质。
        </div>
        <div class="jia_quanbu_text3">
            公司为加盟商设立多个支持部门专门为各汉堡店加盟商解决开店难题
        </div>
        <div class="jia_quanbu_text4">
            360°保姆式服务指导，为新汉堡店加盟商进行专业的实地市场调查，地段评估，市场竞争环境等一系列的可行性分析，保证品牌成功入驻该区域。公司会汉堡店加盟商提供一系列的加盟指导，为创业者赢得经验，走在创业群体的龙头位置。
        </div>
        <div class="jia_quanbu_text5">
            公司将对汉堡店加盟商进行开业前指导培训，涵盖行业经营技巧、营业员接待技巧、产品专业知识、产品制作技巧、店面布置特色管理、市场预测下单、店长培训等一系列技术培训。开业后新产品上架前的新产品制作培训、营业业绩提升培训等。
        </div>
        <div class="jia_quanbu_text6">
            汉堡店加盟商开业时，公司专门的策划部门将根据当地消费群体的区域特性、消费习惯、购买力等诸多因素，有针对性的做出适合该地区的营销策划案，同时公司每年还策划1~2次大型的促销策划。
        </div>
        <div class="jia_quanbu_text7">
            公司每年都将推行全国性大型促销活动来提升品牌知名度，扩大市场占有率，活动的宣传品由公司免费设计。公司也可为各汉堡店加盟商提供有特色地符合当地消费群体的促销策划方案，并可指派当地直属分公司的业务员去实地指导促销活动的开展。
        </div>
        <div class="jia_quanbu_text8">
            公司将不定期派市场督导到各加盟店进行考察，确保品牌产品的统一化、规范化、标准化生产及销售。对各汉堡店加盟商的营销运作、货品陈列、销售策略、员工管理等各方面给予指导性建议，并根据各加盟店实际情况进行销售调整及产品促销推行，协助加盟商进行店铺管理。
        </div>
        <div class="jia_quanbu_text9">
            公司将对各加盟店进行区域保护政策，确保市场的合理分配，杜绝恶性竞争，防范于未然。提升各汉堡店加盟商在该市场区域内品牌的竞争力，确保汉堡店加盟商的良性运营。
        </div>
        <div class="jia_quanbu_text10">
            公司实现互联网信息传输共享，保证第一时间将公司内部信息与客户共享，以便及时调整市场策略及进行促销管理， 保证各汉堡店加盟商持续运营。
        </div>
    </div>
</div>

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