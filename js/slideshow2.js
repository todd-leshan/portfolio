// JavaScript Document
var step = 1;

function bg(){
	var opacity = 0.0;
	if (step == 11){
		n = 11;
		step = 1;
		opacity = 1.0;
		$("#slide"+step).animate({'opacity':opacity},3000);     
		$("#slide"+n).animate({'opacity': 0.0},3000);
		return;     
	}
	var n = step+1;
	$("#slide"+step).animate({'opacity':opacity},3000);
	$("#slide"+n).animate({'opacity':1.0},3000);
	step = n;
}

function loop(){
	setInterval(bg,5000);    
}

setTimeout(loop,0);

$("#button1").click(function(){
    $(".bg").slideToggle();
});

$("#button2").click(function(){
    $(".bg").animate({
		width:'0px',
		height:'0px'
	},"fast");
});

$("#button3").click(function(){
    $(".bg").animate({
		width:'906px',
		height:'274px'
	},"fast");
});
