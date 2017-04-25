//set global var to one when form is validated for the first time?
function validateForm() {
    let emailRegex = /\S+@\S+.\S+/;
    let passRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    let _firstName = document.forms["signUpForm"]["FirstName"].value;
    let _lastName = document.forms["signUpForm"]["LastName"].value;
    let _email = document.forms["signUpForm"]["Email"].value;
    let _pass = document.forms["signUpForm"]["Password"].value;
    let flagFirst = true;
    let flagLast = true;
    let flagEmail = true;
    let flagPass = true;
    
    
    if (_firstName  == "" || _firstName.includes(";") || _firstName.toUpperCase().includes(" TABLE ") || _firstName.includes("--"))  {
    	document.getElementById("FirstName").style.backgroundColor="red";
    	flagFirst = false;
    }
    if (_lastName == "" || _lastName.includes(";") || _lastName.toUpperCase().includes(" TABLE ") || _lastName.includes("--")) {
    	document.getElementById("LastName").style.backgroundColor="red";
    	flagLast = false;
    }
    if (_email == "" || (!emailRegex.test(_email)) || _email.includes(";") || _email.toUpperCase().includes(" TABLE ") || _email.includes("--")) {
    	document.getElementById("Email").style.backgroundColor="red";;
    	flagEmail = false;
    }
    if (_pass == "" || (!passRegex.test(_pass))) {
        document.getElementById("Password").style.backgroundColor="red";
    	flagPass = false;
    }
    
    if(!flagPass) {
    	alert("A password must contain: An Uppercase Letter, a lowercase letter, be at least 6 in length.");
    	return false; 
    } else if(!flagFirst || !flagLast || !flagEmail || !flagPass) {
    	alert("Please fill out all fields.");
    	return false; 
    } else {
    	return true;
    }
}

function validateForm2() {
    let emailRegex = /\S+@\S+.\S+/;
    let _firstName = document.forms["contactForm"]["FirstName"].value;
    let _lastName = document.forms["contactForm"]["LastName"].value;
    let _email = document.forms["contactForm"]["Email"].value;
    let _message = document.forms["contactForm"]["Message"].value;
    let flagFirst = true;
    let flagLast = true;
    let flagEmail = true;
    let flagMessage = true;
    
    
    if (_firstName  == "" || _firstName.includes(";") || _firstName.toUpperCase().includes(" TABLE ") || _firstName.includes("--"))  {
    	document.getElementById("FirstName").style.backgroundColor="red";
    	flagFirst = false;
    }
    if (_lastName == "" || _lastName.includes(";") || _lastName.toUpperCase().includes(" TABLE ") || _lastName.includes("--")) {
    	document.getElementById("LastName").style.backgroundColor="red";
    	flagLast = false;
    }
    if (_email == "" || (!emailRegex.test(_email)) || _email.includes(";") || _email.toUpperCase().includes(" TABLE ") || _email.includes("--")) {
    	document.getElementById("Email").style.backgroundColor="red";;
    	flagEmail = false;
    }
    if (_message == "" || (_message.toUpperCase().includes(" TABLE ") && _message.includes(";"))) {
        document.getElementById("Message").style.backgroundColor="red";
    	flagMessage = false;
    }
    
    if(!flagFirst || !flagLast || !flagEmail || !flagMessage ) {
    	alert("Please fill out all fields.");
    	return false; 
    } else {
    	return true;
    }
}
 
function clearWarning() {
    let emailRegex = /\S+@\S+.\S+/;
    /*Password must contain a lower case letter, upper case letter, number, be at least 6 in length*/
    let passRegex = ("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");;
    let _firstName = document.forms["signUpForm"]["FirstName"].value;
    let _lastName = document.forms["signUpForm"]["LastName"].value;
    let _email = document.forms["signUpForm"]["Email"].value;
    let _pass = document.forms["signUpForm"]["Password"].value;
    
    if (_firstName  != "") {
    	document.getElementById("FirstName").style.backgroundColor="transparent";
    }
    if (_lastName != "") {
    	document.getElementById("LastName").style.backgroundColor="transparent";
    }
    if (emailRegex.test(_email)) {
    	document.getElementById("Email").style.backgroundColor="transparent";;
    }
    if (passRegex.test(_pass)) {
        document.getElementById("Password").style.backgroundColor="transparent";
    }
}  

function clearWarning2() {
    let emailRegex = /\S+@\S+.\S+/;
    let _firstName = document.forms["contactForm"]["FirstName"].value;
    let _lastName = document.forms["contactForm"]["LastName"].value;
    let _email = document.forms["contactForm"]["Email"].value;
    let _message = document.forms["contactForm"]["Message"].value;  
    
    if (_firstName  != "") {
    	document.getElementById("FirstName").style.backgroundColor="transparent";
    }
    if (_lastName != "") {
    	document.getElementById("LastName").style.backgroundColor="transparent";
    }
    if (emailRegex.test(_email)) {
    	document.getElementById("Email").style.backgroundColor="transparent";;
    }
    if (_message != "") {
        document.getElementById("Message").style.backgroundColor="transparent";
    }
}  