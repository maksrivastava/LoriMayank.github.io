$(document).ready(function(){
	
});

function saveGuest(){
	alert();
	var name = $("#name").val();
	var phone = $("#phone").val();
	var email = $("#email").val();
	
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "insert.php?nm=name&ph=phone&em=email",false);
	xmlhttp.send(null);
}
