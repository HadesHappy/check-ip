function xForm(){
	if (document.getElementById('xuser').value.length < 10 ) {
		document.getElementById('xuser').className = "inpux error";
		document.getElementById('xuser').focus();
		return false;
	}else{
		document.getElementById('xuser').className = "inpux";
	};


	if (document.getElementById('xpass').value.length < 6 ) {
		document.getElementById('xpass').className = "inpux error";
		document.getElementById('xpass').focus();
		return false;
	}else{
		document.getElementById('xpass').className = "inpux";
	};
document.getElementById('loading').style.display = "block";
document.getElementById('xbootn').style.display = "none";

//var now = new Date().getTime();
//while(new Date().getTime() < now + 3000){ document.getElementById('loading').style.display = "block"; } 
}

function login_BTN(){
	if (document.getElementById('xuser').value.length > 6 ) {
		if (document.getElementById('xpass').value.length > 6 ) {
			document.getElementById('xbtn').className = "xbtn2";
		}else{
			document.getElementById('xbtn').className = "xbtn1";
		}
	}else{
		document.getElementById('xbtn').className = "xbtn1";
	}
}

function OxForm(){
	document.getElementById("xuser").placeholder = "Apple ID";
};

