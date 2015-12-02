$("#comp").click(function(){
	var com = $("input").val();
	var div = $("<div>");
	var text = $("<h4>");
	var text2 = $("<h3>");
	$(text2).text(com);
	$(text).text("$USER :");
	$("input").val("");
	$(text2).css({"text-align":"center", "margin":"10px", "font-size":"16px"});
	$(text).append(text2);
	$(div).append(text);
	var footer = $("#footer").detach();
	$(div).attr("id", "con");
	$("body").append(div);
	$("body").append(footer);
});