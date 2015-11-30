
$("#sub").click(function(){
	$("h5").detach();
	var valide = 0;
	var input = $("input");
	var in1 = $(input[0]).val();
	var in2 = $(input[1]).val();
	var in3 = $(input[2]).val();
	var in4 = $(input[3]).val();
	var in5 = $(input[4]).val();
	var Nom = /[a-zA-Z]{4,22}/;
	var Prenom = /[a-zA-Z]{4,12}/;
	var adr = /[0-9]{1,3}(?:(?:[,. ]){1}[-a-zA-Zàâäéèêëïîôöùûüç]+)+/;
	var mail = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/; // adresse mail
	var pass = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,15})$/; // min 1 chifre + 1 lettre minimum 6cara max 15
	$(input[0]).css({"background-color":"#ffffff"})
	$(input[1]).css({"background-color":"#ffffff"})
	$(input[2]).css({"background-color":"#ffffff"})
	$(input[3]).css({"background-color":"#ffffff"})
	$(input[4]).css({"background-color":"#ffffff"})
	if (Nom.test(in1)){
		valide++;
	}
	else{
		$(input[0]).css({"background-color":"rgba(179,0,0,0.5)"})
		$("#con").append($("<h5>").text("**Nom invalide (entre 4 et 22 carac)**"));
	}
	if (Prenom.test(in2)){
		valide++;
	}
	else{
		$(input[1]).css({"background-color":"rgba(179,0,0,0.5)"})
		$("#con").append($("<h5>").text("**Prenom invalide (entre 4 et 22 carac)**"));
	}
	if (mail.test(in3)){
		valide++;
	}
	else{
		$(input[2]).css({"background-color":"rgba(179,0,0,0.5)"})
		$("#con").append($("<h5>").text("**E-mail invalide (ex: mail@domaine.fr)**"));
	}
	if (adr.test(in4)){
		valide++;
	}
	else{
		$(input[3]).css({"background-color":"rgba(179,0,0,0.5)"})
		$("#con").append($("<h5>").text("**Adresse invalide (ex: 5 rue, ville code postale)**"));
	}
	if (pass.test(in5)){
		valide++;
	}
	else{
		$(input[4]).css({"background-color":"rgba(179,0,0,0.5)"})
		$("#con").append($("<h5>").text("**Mot de pass invalide (6-15 carac, un chiffre et une lettre minimum)**"));
	}
	if (valide == 5){
	document.location.href="../index.html";
	}
})
