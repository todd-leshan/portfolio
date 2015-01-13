// JavaScript Document
function fnFormValidate(){
	var name = document.getElementById("txtName");
	var phone = document.getElementById("txtPhone");
	var email = document.getElementById("txtEmail");
	var comment = document.getElementById("txtComment");
	var error1 = document.getElementById("error1");
	var error2 = document.getElementById("error2");
	var error3 = document.getElementById("error3");
	var error4 = document.getElementById("error4");
	error1.innerHTML = "";
	error2.innerHTML = "";
	error3.innerHTML = "";
	error4.innerHTML = "";
	
	if(name.value==""){
		name.focus();
		error1.innerHTML = "Please leave your name!";
		return false;
	}
	
	if(name.value.length<2){
		name.select();
		error1.innerHTML = "Your name must be longer than 2 characters.";
		return false;
	}
	
	if(!(phone.value.length<=0  || phone.value.length>7)){
		phone.select();
		error2.innerHTML = "Phone number must be longer than 8 numbers!";
		return false;
	}
	
	var atpos = email.value.indexOf("@");
	var dotpos = email.value.lastIndexOf(".");
	if(email.value.length != 0){
		if(atpos<1 || dotpos<(atpos+2) || (dotpos+2)>=email.length || email.length<7){
			error3.innerHTML = "Please enter a valid email address. eg: a@a.com";
			email.select();
			return false;
		}
	}
	
	if(comment.value.length<10){
		comment.select();
		error4.innerHTML = "Comment must be longer than 10 characters!";
		return false;
	}
	
	window.alert("Thanks for leaving a message!");
}

document.getElementById("contact").onsubmit = fnFormValidate;