/*窗口大小开始*/
function window_w(sh){ 
var winWH = 1200;
var winkuan = sh.split(",");
var windshu = winkuan.length;
$(document).ready(function(){
	$wind = $(window).width();
	for(var q=0;q<windshu;q++){
		$thi = "." + winkuan[q];
		if($wind > winWH){$($thi).css("width",$wind);}else{ $($thi).css("width",winWH);}}
	});
$(window).resize(function(){
	$wind = $(this).width();
	for(var q=0;q<windshu;q++){
		$thi = "." + winkuan[q];
		if($wind > winWH){$($thi).css("width",$wind);}else{ $($thi).css("width",winWH);}}
	});
}
window_w("over_top,in_top,in_juzhon,in_center_bg,in_liyun,men_zhu,in_dibu,nav,bottom-yellow,botphone");
/*窗口大小结束*/

/*顶部导航栏开始*/
$(function() {
	$("#nav>ul>li").hover(function() {
		$(this).addClass("sfhover");
		$("#nav ul ul").slideUp("fast");
		$(this).find("a:first").animate({"top": "20px"},"fast");
		$(this).find("span").animate({"top": "-46px"},"fast");
		if (!$(this).find("ul").is(":animated")) $(this).find("ul").slideDown("fast")
	},
	function() {
		$(this).removeClass("sfhover");
		$(this).find("a:first").animate({"top": "0px"},"fast");
		$(this).find("span").animate({"top": "0px"},"fast");
		if (!$(this).find("ul").is(":animated")) $(this).find("ul").slideUp("fast");
		$("#nav ul ul").slideUp("fast")
	})
});
/*顶部导航栏结束*/

/*菜单开始*/
$(document).ready(function(){
	 $(".zu_mu ul li").hover(function(){
		 $(this).stop(false,false).find("ul").slideDown(50);
		},function(){
		 $(this).stop(true,false).find("ul").slideUp(50);
	});
});
/*菜单结束*/

/*首页视频开始
$(document).ready(function(){
$(".in_center_shipin a").click(function(){
$("body").append("<div id='video'><video controls='controls' poster='datu/shipin.jpg' onclick='playPause()'><source src='/mtv/hgzssj.ogv' type='video/ogg'><source src='/mtv/hgzssj.mp4' type='video/mp4' autoplay='autoplay'>您的浏览器不支持video标签</video><div title='关闭'>X</div></div>");
	});
$(document).on("click","#video div",function(){
$("#video").remove();				   
	}); 	
});*/
/*首页视频结束*/

/*首页弹出结束*/
$(document).ready(function(){
   $("#exit_chu").click(function(){
		$(".tanchu").remove();
	});
});

$(document).ready(function(){
   $("#exit_shu").click(function(){
		$(".kuaishuly").remove();
	});
});
/*首页弹出结束*/