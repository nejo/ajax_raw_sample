function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

var http = createRequestObject();
var div;

function sndReq(page, etiqueta) {
  	div = etiqueta;
    http.open('get', page);
    http.onreadystatechange = handleResponse;
    http.send(null);
}

function handleResponse() {
    if(http.readyState == 4){
        var response = http.responseText;
        var contenido;

        if(response.indexOf('|' != -1)) {
            contenido = response;
			//document.write(div);
            document.getElementById(div).innerHTML = contenido;
        } else {
		  document.getElementById(div).innerHTML = "Ha ocurrido un error.<br />Diculpen las molestias. <p> Envíame un e-mail y lo arreglaré con gusto</p>";
		}
    }
}