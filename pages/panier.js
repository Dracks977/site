var tr = $("tr");
var tr_1 = $(tr[1]).children();
var tr_2 = $(tr[2]).children();
var tr_3 = $(tr[3]).children();
var tr_1_plus = $(tr_1).children();
var tr_2_plus = $(tr_2).children();
var tr_3_plus = $(tr_3).children();
var vide = 0;

//premier article
var ttc_1 = $(tr_1[3]).text();
var ht_1 = $(tr_1[2]).text();
$(tr_1_plus[3]).click(function(){
	var nbr = $(tr_1_plus[2]).text();
	nbr++;
	$(tr_1_plus[2]).text(nbr);
	var ttc = nbr*ttc_1;
	$(tr_1[3]).text(ttc);
	var ht = nbr*ht_1;
	$(tr_1[2]).text(ht);
	var t = $(tr[4]).children();
	var to =  parseFloat($(tr_1[3]).text()) + parseFloat($(tr_2[3]).text()) + parseFloat($(tr_3[3]).text());
	$(t[3]).text(to);
});

$(tr_1_plus[4]).click(function(){
	var nbr = $(tr_1_plus[2]).text();
	nbr--;
	$(tr_1_plus[2]).text(nbr);
	var ttc = $(tr_1[3]).text();
	ttc = nbr*ttc_1
	$(tr_1[3]).text(ttc);
	var ht = nbr*ht_1;
	$(tr_1[2]).text(ht);
	var t = $(tr[4]).children();
	var to =  parseFloat($(tr_1[3]).text()) + parseFloat($(tr_2[3]).text()) + parseFloat($(tr_3[3]).text());
	$(t[3]).text(to);
	if (nbr === 0){
		$(tr[1]).attr("style", "display:none");
		vide++;
		if (vide == 3){
		$("table").attr("style", "display:none");
		var h1 = $("<h1>");
		$(h1).attr("id", "vide");
		$("#fina").attr("style", "display:none");
		$(h1).text("Pannier Vide");
		$("#con").attr("id", "con2");
		$("#con2").append(h1);
		}
	}
});

//deuxiem article
var ttc_2 = $(tr_2[3]).text();
var ht_2 = $(tr_2[2]).text();
$(tr_2_plus[3]).click(function(){
	var nbr = $(tr_2_plus[2]).text();
	nbr++;
	$(tr_2_plus[2]).text(nbr);
	var ttc = nbr*ttc_2;
	$(tr_2[3]).text(ttc);
	var ht = nbr*ht_2;
	$(tr_2[2]).text(ht);
	var t = $(tr[4]).children();
	var to =  parseFloat($(tr_1[3]).text()) + parseFloat($(tr_2[3]).text()) + parseFloat($(tr_3[3]).text());
	$(t[3]).text(to);
});

$(tr_2_plus[4]).click(function(){
	var nbr = $(tr_2_plus[2]).text();
	nbr--;
	$(tr_2_plus[2]).text(nbr);
	var ttc = $(tr_2[3]).text();
	ttc = nbr*ttc_2
	$(tr_2[3]).text(ttc);
	var ht = nbr*ht_2;
	$(tr_2[2]).text(ht);
	var t = $(tr[4]).children();
	var to =  parseFloat($(tr_1[3]).text()) + parseFloat($(tr_2[3]).text()) + parseFloat($(tr_3[3]).text());
	$(t[3]).text(to);
	if (nbr === 0){
		$(tr[2]).attr("style", "display:none");
		vide++;
		if (vide == 3){
		$("table").attr("style", "display:none");
		var h1 = $("<h1>");
		$(h1).attr("id", "vide");
		$("#fina").attr("style", "display:none");
		$(h1).text("Pannier Vide");
		$("#con").attr("id", "con2");
		$("#con2").append(h1);
		}
	}
});


//troixiem article
var ttc_3 = $(tr_3[3]).text();
var ht_3 = $(tr_3[2]).text();
$(tr_3_plus[3]).click(function(){
	var nbr = $(tr_3_plus[2]).text();
	nbr++;
	$(tr_3_plus[2]).text(nbr);
	var ttc = nbr*ttc_3;
	$(tr_3[3]).text(ttc);
	var ht = nbr*ht_3;
	$(tr_3[2]).text(ht);
	var t = $(tr[4]).children();
	var to =  parseFloat($(tr_1[3]).text()) + parseFloat($(tr_2[3]).text()) + parseFloat($(tr_3[3]).text());
	$(t[3]).text(to);
});

$(tr_3_plus[4]).click(function(){
	var nbr = $(tr_3_plus[2]).text();
	nbr--;
	$(tr_3_plus[2]).text(nbr);
	var ttc = $(tr_3[3]).text();
	ttc = nbr*ttc_3
	$(tr_3[3]).text(ttc);
	var ht = nbr*ht_3;
	$(tr_3[2]).text(ht);
	var t = $(tr[4]).children();
	var to =  parseFloat($(tr_1[3]).text()) + parseFloat($(tr_2[3]).text()) + parseFloat($(tr_3[3]).text());
	$(t[3]).text(to);
	if (nbr === 0){
		$(tr[3]).attr("style", "display:none");
		vide++;
		if (vide == 3){
		$("table").attr("style", "display:none");
		var h1 = $("<h1>");
		$(h1).attr("id", "vide");
		$("#fina").attr("style", "display:none");
		$(h1).text("Pannier Vide");
		$("#con").attr("id", "con2");
		$("#con2").append(h1);
		}
	}
});
