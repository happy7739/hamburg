/*���ڴ�С��ʼ*/
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
/*���ڴ�С����*/

/*������������ʼ*/
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
/*��������������*/

/*�˵���ʼ*/
$(document).ready(function(){
	 $(".zu_mu ul li").hover(function(){
		 $(this).stop(false,false).find("ul").slideDown(50);
		},function(){
		 $(this).stop(true,false).find("ul").slideUp(50);
	});
});
/*�˵�����*/

/*��ҳ��Ƶ��ʼ
$(document).ready(function(){
$(".in_center_shipin a").click(function(){
$("body").append("<div id='video'><video controls='controls' poster='datu/shipin.jpg' onclick='playPause()'><source src='/mtv/hgzssj.ogv' type='video/ogg'><source src='/mtv/hgzssj.mp4' type='video/mp4' autoplay='autoplay'>�����������֧��video��ǩ</video><div title='�ر�'>X</div></div>");
	});
$(document).on("click","#video div",function(){
$("#video").remove();				   
	}); 	
});*/
/*��ҳ��Ƶ����*/

/*��ҳ��������*/
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
/*��ҳ��������*/