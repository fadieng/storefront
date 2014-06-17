//ajax.js


function getXmlHttpObject(){

    var xmlhttp;
    
    try {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlHttp = new XMLHttpRequest();
    }
    catch (e) {

        try {
            // code for IE6
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }

        catch (e) {

            try {
                // code for IE5
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            catch (e) {

                alert("Your browser does not support XMLHTTP.");
                return null;

            }
        }
    }
    return xmlHttp;
}



function stateChanged() {

    if (xmlHttp.readyState == 4) {
        document.getElementById("searchResults").innerHTML = xmlHttp.responseText;
    }
}

function stateChanged1() {

    if (xmlHttp.readyState == 4) {
        document.getElementById("addcompleted").innerHTML = xmlHttp.responseText;
    }
}



function showResults(str) {

    

    if (str.length == 0) {
        document.getElementById("searchResults").innerHTML = "";
        return;
    }

    xmlHttp = getXmlHttpObject();

    if (xmlHttp == null) {
        alert ("Your browser does not support XMLHTTP!");
        return;
    }        

    var url = "model/ajaxLibrary.php";
    url = url + "?q=" + str;
    url = url + "&sid=" + Math.random();
    
    

    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}




function addToCart(prod_id, qty) {

    
    xmlHttp = getXmlHttpObject();

    if (xmlHttp == null) {
        alert ("Your browser does not support XMLHTTP!");
        return;
    }        

    var url = "model/cartLibrary.php";
    url = url + "?id=" + prod_id;
    url = url + "&q=" + qty;
    url = url + "&sid=" + Math.random();
    
    

    xmlHttp.onreadystatechange = stateChanged1;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}