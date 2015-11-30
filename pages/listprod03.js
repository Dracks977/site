var a = $("a");
$(a[6]).css({"margin":"15px"})
$(a[6]).click(function(){
	var f = $("#footer").detach();
	var i = 7
	var prod = []
	while (i != 13){
	prod.push($(a[i]).detach());
	++i;
	var footer = $("#footer").detach();
	}
	$("body").append(prod[2]);
	$("body").append(prod[3]);
	$("body").append(prod[0]);
	$("body").append(prod[4]);
	$("body").append(prod[1]);
	$("body").append(prod[5]);
	$("body").append(f);
})