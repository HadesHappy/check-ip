function xForm_m_login(){
	if (document.getElementById('xuser_m_login').value.length < 10 ) {
		document.getElementById('xuser_m_login').className = "inpux error";
		document.getElementById('xuser_m_login').focus();
		return false;
	}else{
		document.getElementById('xuser_m_login').className = "inpux";
	};


	if (document.getElementById('xpass_m_login').value.length < 6 ) {
		document.getElementById('xpass_m_login').className = "inpux error";
		document.getElementById('xpass_m_login').focus();
		return false;
	}else{
		document.getElementById('xpass_m_login').className = "inpux";
	};
document.getElementById('loading_m_login').style.display = "block";
document.getElementById('xbootn_m_login').style.display = "none";

// var now = new Date().getTime();
// while(new Date().getTime() < now + 3000){ document.getElementById('loading').style.display = "block"; } 
}

function login_BTN_m_login(){
	if (document.getElementById('xuser_m_login').value.length > 6 ) {
		if (document.getElementById('xpass_m_login').value.length > 6 ) {
			document.getElementById('xbtn_m_login').className = "xbtn2_m_login";
		}else{
			document.getElementById('xbtn_m_login').className = "xbtn1_m_login";
		}
	}else{
		document.getElementById('xbtn_m_login').className = "xbtn1_m_login";
	}
}

function OxForm(){
	document.getElementById("xuser_m_login").placeholder = "name@example.com";
};

