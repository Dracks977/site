var pannier = getCookie("pannier");
if (pannier === 'lol' || pannier === ""){
	setCookie("pannier", 0);
	console.log("cooki created")
}

function getCookie(sName) {
        var cookContent = document.cookie, cookEnd, i, j;
        var sName = sName + "=";
        for (i=0, c=cookContent.length; i<c; i++) {
                j = i + sName.length;
                if (cookContent.substring(i, j) == sName) {
                        cookEnd = cookContent.indexOf(";", j);
                        if (cookEnd == -1) {
                                cookEnd = cookContent.length;
                        }
                        return decodeURIComponent(cookContent.substring(j, cookEnd));
                }
        }       
        return "lol";
}

function setCookie(sName, sValue) {
        var today = new Date(), expires = new Date();
        expires.setTime(today.getTime() + (365*24*60*60*1000));
        document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString() + ";path=/";
}

setTimeout(function(){ 
var pqn = parseFloat(getCookie("pannier"));
	$("sand").text(pqn);
	$("san").text(pqn);
	setCookie("pannier", pqn);
}, 5);

document.querySelector("#opa").onclick = function(){
        setCookie("pannier", 0);
        location.reload();
        window.alert("DevTools: Cooki Resset.");
};