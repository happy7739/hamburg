/*public*/
$(function(){
    $(".icpsp_solu_ol>li>a").attr({"href":"solution.aspx?TypeId=63&FId=t25:63:25"})
    $('.qq').children('li:first').click(function(){
        $('#qiao-mess-wrap').toggle();
    });
})
/*public*//*ea_h*/

/*xn_c_index_14_industry*/
$(function(){
    if($('.xn_c_index_14_industry').length>0){
        var speed=3000,seed=500,timer=null;
        var li_h=$('.xn_c_index_14_indUl').children('li').outerHeight(true);
        function fn(){
            $('.xn_c_index_14_indUl').stop().animate({'margin-top':-li_h+'px'},seed,function(){
            $('.xn_c_index_14_indUl').append($('.xn_c_index_14_indUl').children('li:first')).css('margin-top',0);
            })
        }
        timer=setInterval(fn,speed);
        $('.xn_c_index_14_indUl').hover(function(){
            clearInterval(timer);
        },function(){
            timer=setInterval(fn,speed);
        })
    }
})
/*end_xn_c_index_14_industry*/
/*xn_c_index_15_news*/
$(function(){
    if($('.xn_c_index_15_news').length>0){
        var $li_l=$('.xn_c_index15_indUl').children('li').length;
        var $li_w=$('.xn_c_index15_indUl').children('li').outerWidth(true);
        
        var seed=500;
        $('.xn_c_index15_indUl').width($li_w*$li_l);
        var $ul=$('.xn_c_index15_indUl');
        var $left_btn=$('.xn_c_index15_left_btn');
        var $right_btn=$('.xn_c_index15_right_btn');
        $left_btn.click(function(){
            $ul.stop().animate({'margin-left':-$li_w+'px'},seed,function(){
                $ul.append($ul.children('li:first')).css('margin-left',0);
            })
        })
        
        $right_btn.click(function(){
            $ul.prepend($ul.children('li:last')).css('margin-left',-$li_w+'px').stop().animate({'margin-left':0},seed);
        })
    }
})
/*end_xn_c_index_15_news*/
