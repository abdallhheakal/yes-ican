var education = document.getElementById("education"), 
    job       = document.getElementById("job"),
    loginForm = document.getElementById("loginForm"),
    login     = document.getElementById("link"),
    register  = document.getElementById("register"),
    login1    = document.getElementById("link1"),
    password  = document.getElementById("password"),
    confirm   = document.getElementById("confirm"),
    p         = document.getElementById("p"),
    facebook  = document.getElementById("facebook"),
    i;
 //to open another page
education.onclick = function () {
    "use strict";
    window.location = "education.php";
};
job.onclick = function () {
	"use strict";
	window.location = "jop.php";
};
//to toggle between login and register
login.onclick = function () {
	"use strict";
	loginForm.style.display = "none";
	register.style.display  = "block";
};
login1.onclick = function () {
	"use strict";
	loginForm.style.display = "block";
	register.style.display  = "none";
};
//to check passwort is right or not
confirm.onkeyup = function () {
	"use strict";
	if(password.value !== confirm.value){
		p.textContent = "password is wrong";
	}
	else if(password.value === ""){
	p.textContent = "";
   }
   else{
		p.textContent =" ";
	}
}
//to open page of facebook
facebook.onclick = function () {
    "use strict";
    window.location = "https://www.facebook.com/Yes-I-Can-104182821654834";
};