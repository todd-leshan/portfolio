// JavaScript Document

function fnClicktoOpen(){
/*	window.open("../images/JavaScript-logo.png",null, 'height=500, width=500, toolbar=0, location=0, status=0, scrollbars=0, resizeable=0');*/
	
	var img = document.getElementById("a");
	var image = new Image();
	image.src = img.src;
	
	var padding = 20;
	
	var width = image.width + padding;
	var height = image.height + padding;
	window.alert(parseInt(image.width));
	
	window.open(image.src,  null, 'height=' + height + ', width=' + width + ', toolbar=0, location=0, status=0, scrollbars=0, resizable=0');
}

document.getElementById("a").onclick = fnClicktoOpen;