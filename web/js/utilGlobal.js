
var host = location.host;

if(host.indexOf("localhost") != -1 || host.indexOf("127.0.0.1") != -1 ){
    var SERVER_ADDR = "http://localhost:8000/";
}else if(host.indexOf("www") != -1){
    var SERVER_ADDR = "http://www.agrot-is.net/";
}else{
    var SERVER_ADDR = "http://agrot-is.net/";
}


function updateNavigationBar(selector){
    $(".main-items").addClass("active");
    $("."+selector).addClass("active");
}

