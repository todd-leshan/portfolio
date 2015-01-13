function addPrevClass(e){
	var target = e.target;
	if(target.getAttribute('src')) { // check if it is img
	  var li = target.parentNode.parentNode;
	  var prevLi = li.previousElementSibling;
	  if(prevLi) {
		prevLi.className = 'previous';
	  }
	
	  target.addEventListener('mouseout', function() { 
		prevLi.removeAttribute('class');
	  }, false);
	}
}

if (window.addEventListener) {
  document.getElementById("dock").addEventListener('mouseover', addPrevClass, false);
}

