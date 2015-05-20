function toggleImg(imgName) {
	var imgID = "QTR_Hdr_"+imgName;
	var elem = document.getElementById(imgID);
	var elemSrc = elem.src;
	var elemPath = elemSrc.substr(0, elemSrc.lastIndexOf("/"));
	if (elemSrc.indexOf("_RO")!=-1) {
		//We're showing the Rollover version
		elem.src = "images/"+imgID+".gif";
	} else {
		//We're showing the original version
		elem.src = "images/"+imgID+"_RO.gif";
	}
}

function checkVals() {
	
}