<?php /*a:4:{s:58:"F:\Project\hamburg\application\index\view\index\index.html";i:1592890691;s:59:"F:\Project\hamburg\application\index\view\public\index.html";i:1591082119;s:60:"F:\Project\hamburg\application\index\view\public\header.html";i:1591087968;s:60:"F:\Project\hamburg\application\index\view\public\footer.html";i:1591087968;}*/ ?>
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
    <script src="/static/index/js/jquery-1.8.3.min.js" type="text/javascript"></script>
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
    
<meta name="baidu-site-verification" content="Hm2QqOBHdv" />
<!--swiper-->
<link rel="stylesheet" href="/static/index/swiper/css/swiper.min.css">
<!-- Swiper JS -->
<script src="/static/index/swiper/js/swiper.min.js"></script>
<style>
    .swiper-container {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        text-align: center;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-button-next{
        color: #F5CB1F;
        bottom: 0px;
        top: 95%;
        right: 40%;
    }
    .swiper-button-prev{
        color: #F5CB1F;
        bottom: 0px;
        top: 95%;
        left: 40%;
    }
    .swiper-container-horizontal>.swiper-pagination-bullets{
        bottom: 18px;
    }
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
    }
    .swiper-slide img{
        width:100%;
        height:auto;
    }

    .swiper-container2 {
        width: 100%;
        height: 100%;
    }
    .swiper-slide2 {
        color: black;
        text-align: center;
        font-size: 18px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-container3{
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide3 img{
        width:305px;
        height:205px;
    }
    .swiper-slide4 h3 {
        position: absolute;/*让其平滑滚动的重要属性*/
        bottom: 0;
        background: url('/static/index/image/red-cover.png') no-repeat;
        height: 90px;
        padding-left: 30px;
        width: 254px;
    }
    .swiper-slide4 h3 p {
        float: left;
        font-weight: normal;
        line-height: 90px;
        color: #000;
        font-size: 15px;
    }
    .swiper-wrapper4 {
        -webkit-transition-timing-function: linear; /*之前是ease-out*/
        -moz-transition-timing-function: linear;
        -ms-transition-timing-function: linear;
        -o-transition-timing-function: linear;
        transition-timing-function: linear;
        margin: 0 auto;
    }
    .swiper-slide4 img{
        width: 270px;
        height: 385px;
        border: 0 none;
        vertical-align: top;
    }
</style>
<!--滚动、手风琴-->
<link rel="stylesheet" type="text/css" href="/static/index/css/model.css" />
<!--滚动、手风琴-->
<!-- 新闻与趣吃RC -->
<link rel="stylesheet" type="text/css" href="/static/index/css/newsandrc.css" />
<!-- 新闻与趣吃RC -->
<script type="text/javascript">

    /*底部电话滚动限制与关闭开始*/
    onscroll = function () {
        var st = document.documentElement.scrollTop || document.body.scrollTop;
        if (!botphone.offsetWidth && st <= 3650) {
            botphone.style.display = 'block';
        }
        else if (!!botphone.offsetWidth && st > 3650) {
            botphone.style.display = 'none';
        }
    }
    $(document).ready(function () {
        $("#botmove").click(function () {
            $("#botphone").remove();
        });
    });
    /*底部电话滚动限制与关闭结束*/
</script>

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


    <!-- 首页大图滚动开始 -->
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if(!(empty($banner) || (($banner instanceof \think\Collection || $banner instanceof \think\Paginator ) && $banner->isEmpty()))): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <div class="swiper-slide">
                <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" alt="<?php echo htmlentities($val['alt']); ?>" title="<?php echo htmlentities($val['title']); ?>"/>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2000,
                stopOnLastSlide: false,
                disableOnInteraction: false,
            },
        });
    </script>
    <!-- 首页大图滚动结束 -->
    <!--右侧广告栏开始-->
    <div id="banner_wrap">
        <div id="new_menu_area">
            <a href="<?php echo url('index/join/process'); ?>" target="_blank" title="加盟指南">
                <img src="/static/index/image/index/rightsidead.jpg" alt="乐享汉堡店加盟_广告" />
            </a>
        </div>
        <a class="main_banner_btn" href="#" title="">
            <img src="/static/index/image/index/rightsidebtn.png" alt="乐享汉堡店加盟_广告按钮" />
        </a>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            win_banner();
            $(window).resize(function () {
                win_banner();
            });
            $(".main_banner_btn").click(function () {
                if ($("#banner_wrap").hasClass("on")) {
                    $("#banner_wrap").animate({ "right": 0 }, 500);
                    $("#banner_wrap").removeClass("on");
                } else {
                    $("#banner_wrap").animate({ "right": -640 }, 500);
                    $("#banner_wrap").addClass("on");
                }

            });
        });
        function win_banner() {
            var win_wid = $(window).width();
            if (win_wid < 1280) {
                $("#banner_wrap").removeClass("on");
                $("#banner_wrap").css({ "right": 0 }, 500);
            } else {
                $("#banner_wrap").addClass("on");
                $("#banner_wrap").css({ "right": -640 }, 500);
            }
        }
    </script>
    <!--右侧广告栏结束-->
    <div style="height: 30px;">
    </div>
    <br />
    <div class="wordsin">
        <br />
        <p style="font-size: 24px; font-weight: 500;">
            &Phi;&nbsp;Maileji Hamburg</p>
        哆唻客汉堡<br />
        <br />
        <p class="title_sta_inside">
            풍부하다, 맛있다, 신선한 음식, 극력 만듭니다. 새로운, 특색 있는 음식 체인 시스템.</p>
        <br />
        <br />
        <br />
    </div>
    <!--视频、新闻、趣吃效果开始-->
    <div id="ea_c" style="width: 1200px; margin: 0 auto;">
        <div class="index_cnt">
            <div class="index_cnt_m">
                <div class="index_wrap">
                    <div class="index_con">
                        <div class="index_con1">
                            <!--视频效果开始-->
                            <div class="video">
                                <div class="video_title">
                                    产品展示&nbsp;비디오</div>
                                <div class="in_center_shipin">
                                    <a href="<?php echo url('index/product/index'); ?>" title="产品展示">
                                        <img src="/static/index/image/index/shipin.jpg" alt="乐享汉堡店加盟_产品展示" title="产品展示" width="330" height="212" />
                                    </a>
                                </div>
                            </div>
                            <!--视频效果结束-->
                            <!--新闻效果开始-->
                            <div class="xn_c_index_14_industry">
                                <div class="xn_c_index_14_title">
                                    <span class="xn_c_index_14_title1">
                                        <span name="_edi_c5_1">新闻中心&nbsp;소식</span>
                                    </span>
                                    <span class="xn_c_index_14_title2">
                                        <span name="_edi_c5_2"></span>
                                    </span>
                                    <span class="xn_c_index_14_title3">
                                        <a href="<?php echo url('index/news/index'); ?>">
                                            <span name="_edi_c5_3">+</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="xn_c_index_14_indMain">
                                    <div class="swiper-container2">
                                        <div class="swiper-wrapper">
                                            <?php if(!(empty($news) || (($news instanceof \think\Collection || $news instanceof \think\Paginator ) && $news->isEmpty()))): if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                            <div class="swiper-slide2 swiper-slide">
                                                <div class="xn_c_index_14_indTitle" >
                                                    <a title="<?php echo htmlentities($val['title']); ?>" href="<?php echo url('index/news/index'); ?>?cat=<?php echo htmlentities($val['pid']); ?>&id=<?php echo htmlentities($val['id']); ?>" target="_blank">
                                                        <?php echo htmlentities($val['title']); ?>
                                                    </a>
                                                </div>
                                                <div class="xn_c_index_14_data">
                                                    <span class="xn_c_5_time1">
                                                        <span class="xn_c_index_14_indData_ctl00_xn_c_5_Text1">
                                                            <?php echo htmlentities($val['time']); ?>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper('.swiper-container2', {
                                        grabCursor: true,
                                        slidesPerView: 6,
                                        direction: 'vertical',
                                        loop: true,
                                        autoplay: {
                                            delay: 2000,
                                            stopOnLastSlide: false,
                                            disableOnInteraction: false,
                                        },
                                    });
                                </script>
                            </div>
                            <!--end_xn_c_index_14_industry新闻效果结束-->
                            <!--xn_c_index_15_news效果开始-->
                            <div class="xn_c_index_15_news">
                                <div class="xn_c_index15_title">
                                    <span class="xn_c_index15_title1">
                                        <span name="_edi_c5_4">店铺展示&nbsp;가게 전시</span>
                                    </span>
                                    <span class="xn_c_index15_title2">
                                            <span name="_edi_c5_5"></span>
                                    </span>
                                    <span class="xn_c_index15_title3">
                                        <a href="<?php echo url('index/store/index'); ?>">
                                            <span name="_edi_c5_6">+</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="xn_c_index15_indMain">
                                    <div class="xn_c_index15_left_btn">
                                    </div>
                                    <div class="xn_c_index15_con">
                                        <div class="swiper-container3" id="swiper_container3">
                                            <div class="swiper-wrapper">
                                                <?php if(!(empty($store) || (($store instanceof \think\Collection || $store instanceof \think\Paginator ) && $store->isEmpty()))): if(is_array($store) || $store instanceof \think\Collection || $store instanceof \think\Paginator): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                                <div class="swiper-slide3 swiper-slide">
                                                    <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>">
                                                </div>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xn_c_index15_right_btn">
                                    </div>
                                </div>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper3 = new Swiper('.swiper-container3', {
                                        /*speed:2000,*/
                                        grabCursor: true,
                                        slidesPerView: 1,
                                        spaceBetween: 30,
                                        loop: true,
                                        navigation: {
                                            nextEl: '.xn_c_index15_right_btn',
                                            prevEl: '.xn_c_index15_left_btn',
                                        },
                                        autoplay: {
                                            delay: 2000,
                                            stopOnLastSlide: false,
                                            disableOnInteraction: false,
                                        },
                                    });
                                    /*鼠标移入停止轮播，鼠标离开 继续轮播*/
                                    var comtainer = $("#swiper_container3");
                                    comtainer.onmouseenter = function () {
                                        alert('???');
                                        swiper3.stopAutoplay();
                                    };
                                    comtainer.onmouseleave = function () {
                                        alert('???');
                                        swiper3.startAutoplay();
                                    }
                                </script>
                            </div>
                            <!--end_xn_c_index_15_news趣吃RC效果结束-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--视频、新闻、趣吃效果结束-->
    <div style="height: 280px;">
    </div>
    <div class="wordsin">
        <br />
        <br />
        <br />
        <p class="title_sta">
            <font>产品体系</font>&nbsp;&nbsp;&nbsp;<a href="<?php echo url('index/product/index'); ?>" title="美味炸鸡">제품 체계</a></p>
        <br />
        <p class="title_sta_inside">
            맛 과 위생 · 건강과 합리적인 가격의 패스트푸드 브랜드.</p>
        <br />
    </div>
    <!-- 首页产品滚动开始 -->
    <div id="container">
        <div class="rd2">
            <img alt="上一张" class="l_btn" src="/static/index/image/index/l-btn.png" />
            <img alt="下一张" class="r_btn" src="/static/index/image/index/r-btn.png" />
            <div class="content" style="margin-left: 3%;width: 94%;overflow:hidden;">
                <div class="swiper-container4">
                    <div class="swiper-wrapper swiper-wrapper4">
                        <?php if(!(empty($roll) || (($roll instanceof \think\Collection || $roll instanceof \think\Paginator ) && $roll->isEmpty()))): if(is_array($roll) || $roll instanceof \think\Collection || $roll instanceof \think\Paginator): $i = 0; $__LIST__ = $roll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide4 swiper-slide">
                            <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" alt="<?php echo htmlentities($val['alt']); ?>" title='<?php echo htmlentities($val['title']); ?>' />
                            <h3><p><?php echo htmlentities($val['title']); ?></p></h3>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper('.swiper-container4', {
                    grabCursor: true,
                    speed: 4000,
                    slidesPerView: 3.6,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 0,
                        stopOnLastSlide: false,
                        disableOnInteraction: false,
                        reverseDirection: true,
                    },
                    breakpointsInverse: true,
                    breakpoints: {
                        //当宽度大于等于
                        270: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        540: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        810: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        1080: {
                            slidesPerView: 3.6,
                            spaceBetween: 30
                        }
                    }
                });
                $(".l_btn").click(function(){
                    swiper.params.autoplay.reverseDirection=false;
                });
                $(".r_btn").click(function(){
                    swiper.params.autoplay.reverseDirection=true;
                });
            </script>
        </div>
    </div>
    <!-- 首页产品滚动结束 -->
    <!--首页产品滚动加载区域开始-->
    <script type="text/javascript" src="/static/index/js/common.js"></script>
    <!--首页产品滚动加载区域结束-->
    <div class="wordsin">
        <br />
        <p class="title_end">
            <img src="/static/index/image/index/color-line.png" width="350" height="20" alt="乐享汉堡店加盟_分隔线" />
            <a href="<?php echo url('index/product/index'); ?>" title="汉堡加盟">패스트푸드 가맹</a>
            <img src="/static/index/image/index/color-line.png" width="350" height="20" alt="乐享汉堡店加盟_分隔线" />
        </p><br />
        <img alt="乐享汉堡店加盟_分隔线" src="/static/index/image/index/color-line.png" />
        <br /><br /><br />
        <p class="title_sta">
            <font>店铺展示</font>&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('index/store/index'); ?>" title="店铺展示">가게 전시</a>
        </p>
        <br />
        <p class="title_sta_inside">
            맛 과 위생 · 건강과 합리적인 가격의 패스트푸드 브랜드.</p>
        <br />
        <br />
        <br />
    </div>
    <div class="in_juzhon">
        <a title="店铺展示">
            <img alt="店铺展示" width="100%" height="733" style="background: url(/static/index/image/index/diantest.jpg) no-repeat center;"
                 src="/static/index/image/alpha.png" />
        </a>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <div class="wordsin">
        <br />
        <br />
        <p class="title_end">
            <img src="/static/index/image/index/color-line.png" width="350" height="20" alt="乐享汉堡店加盟_分隔线" />
            <a href="http://www.lxhanbao.com/dp_xn_1.html" title="店铺展示">가게</a>
            <img src="/static/index/image/index/color-line.png" width="350" height="20" alt="乐享汉堡店加盟_分隔线" />
        </p>
        <br />
        <img alt="" src="/static/index/image/index/color-line.png" />
        <br /><br /><br />
        <p class="title_sta">
            <font>汉堡炸鸡套餐</font>&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('index/product/index'); ?>" title="无骨鸡腿肉">햄버거 후라이드치킨 정식</a>
        </p>
        <br />
        <p class="title_sta_inside">
            고객들이 REMNANT CHICKEN 을 드시는 모습을 볼 때 가장 행복합니다.<br />
            다양하게, 풍부하게, 알차게 선물하는 마음으로 항상 준비하겠습니다.
        </p>
        <br />
    </div>
    <!--手风琴效果开始-->
    <div class="shoufq">
        <div class='accordion' style="margin: 0 auto;">
            <ul>
            <?php if(!(empty($card) || (($card instanceof \think\Collection || $card instanceof \think\Paginator ) && $card->isEmpty()))): if(is_array($card) || $card instanceof \think\Collection || $card instanceof \think\Paginator): $i = 0; $__LIST__ = $card;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class='title'>
                        <a href="javascript:void(0);"><?php echo htmlentities($val['title']); ?></a>
                    </div>
                    <a href="javascript:void(0);" title="<?php echo htmlentities($val['title']); ?>">
                        <img src='<?php echo htmlentities(get_file_path($val['img'])); ?>' alt="<?php echo htmlentities($val['alt']); ?>" />
                    </a>
                </li>
               <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
            </ul>
        </div>
    </div>
    <!--手风琴效果结束-->
    <div class="wordsin">
        <br /><br />
        <p class="title_end">
            <img src="/static/index/image/index/color-line.png" width="350" height="20" alt="汉堡店加盟_分隔线" />
            <a href="<?php echo url('index/product/index'); ?>" title="无骨鸡腿肉">세트</a>
            <img src="/static/index/image/index/color-line.png" width="350" height="20" alt="汉堡店加盟_分隔线" />
        </p><br />
        <img alt="汉堡店加盟_分隔线" src="/static/index/image/index/color-line.png" />
        <br /><br /><br />
        <p class="title_sta">
            <font>品牌前景</font>&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('index/aboutus/details'); ?>?cat=1" title="品牌资质">브랜드 전망</a>
        </p><br />
    </div>
    <!--品牌前景开始-->
    <div style="width: 1100px; margin: 20px auto;">
        <div style="width: 600px; float: left;">
            <img src="/static/index/image/index/bro-fb.png" alt="汉堡店加盟_公司标志" title="公司标志" />
        </div>
        <div style="width: 500px; float: right;">
            <div style="width: 130px; height: 4px; background-color: #fff; margin-bottom: 40px;
                margin-top: 75px;"></div>
            <div style="margin-top: 20px; font-size: 14px;">
                民以食为天，吃是永远的朝阳产业，不分国籍，不分地域，中国是个有着13亿人口的大市场，13亿人的胃，永远也填不饱。餐饮行业无论在任何时候都是个投入少、产出高、低风险的行业。
            </div>
            <div style="margin-top: 20px; font-size: 14px;">
                汉堡炸鸡，在一条百年街上有一家经营了近十年的汉堡店，没有华丽的装修，却引得众多食客慕名而来。
            </div>
            <div style="margin-top: 20px; font-size: 14px;">
                秉承着专注精致、注重细节的家族精神，成都餐协餐饮管理有限公司将此美味的秘方引入中国，让更多中国消费者能品尝到传统地道的西式快餐品牌。
            </div>
            <div style="margin-top: 20px; font-size: 14px;">
                可谓正宗，服务周全。炸鸡汉堡加盟选乐享汉堡。公司提供全方位的技术支持与服务，让您选择的事业没有后顾之忧！
            </div>
        </div>
    </div>
    <!--品牌前景结束-->
    <div style="height: 480px;">
    </div>
    <!--底部电话开始-->
    <div style="background-color: #f5cb1f; opacity: 1; width: 100%;">
        <div id="botphone">
            <img src="/static/index/image/index/bottom_hold.png" usemap="#Map" border="0" alt="汉堡店加盟_底部电话" />
            <map name="Map" id="Map">
                <area shape="rect" coords="1479,33,1515,69" id="botmove" title="关闭" />
            </map>
        </div>
    </div>
    <!--底部电话结束-->


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

</body>
</html>