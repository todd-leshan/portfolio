// JavaScript Document

function ImgOriginal(id){
	var img = document.getElementById(id);
	var image = new Image();
	image.src = img.src;
	img.width = image.width;
	img.height = image.height;
}

/*$('#close').click(function() {
	$('#image-layer').fadeOut(function() {
		img.remove();
	});
});*/

function fnRemove(img){
	$('#close').click(function() {
		$('#image-layer').fadeOut(function() {
			img.remove();
		});
	});
}

$('#boostworks').click(function() {
    var img = $(this).clone().appendTo($('#image-layer'));
	fnRemove(img);
	$('#image-layer').fadeIn(ImgOriginal("boostworks"));
});

$('#surfaus').click(function() {
    var img = $(this).clone().appendTo($('#image-layer'));
	fnRemove(img);
	$('#image-layer').fadeIn(ImgOriginal("surfaus"));
});

$('#17tools').click(function() {
    var img = $(this).clone().appendTo($('#image-layer'));
	fnRemove(img);
	$('#image-layer').fadeIn(ImgOriginal("17tools"));
});