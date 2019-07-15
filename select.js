//noprotect

function callSelect() {
    // create array element
    var oldPrice = [];
    // get all td elements in id "originalTime"
    var getPreis = document.getElementById('originalTime').getElementsByTagName('th');
    // determine number of th elements
    for (i = 0; i < getPreis.length; i++) {
        oldPrice.push(parseFloat(getPreis[i].childNodes[0].nodeValue));
    }
    // get all td elements in id "mappingTime"
    var putPreis = document.getElementById('mappingTime').getElementsByTagName('th');

    // update your values
    for (i = 0; i < getPreis.length; i++) {
       document.getElementById("mappingTime").style.backgroundColor = "yellow";
    }
	
	
}