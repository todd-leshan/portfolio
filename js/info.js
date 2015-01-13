// JavaScript Document

$(function(){
	$("#info").animate({
		left:"-240px"
	},10000);
})

function fnInfo(){
	$(function(){
		$("#info").animate({
			left:"0px"
		});
	});
}

document.getElementById("info").onmouseover = fnInfo;