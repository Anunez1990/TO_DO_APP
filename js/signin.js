function validateForms() {
  //Get the user name coming from HTML form
  var uname = document.forms["loginForm"]["Username"].value;
  // var psw = document.forms["loginForm"]["Password"].value;

  //alert("entre a la validacion")
  
  //message();

  // EMAIL VALIDATION
  // if (validateEmail(uname)) {
  //   document.getElementsByClassName("invalid-input").item(0).style.display = "none";
  //   return true;
  // } else {
  //   document.getElementsByClassName("invalid-input").item(0).style.display = "block";
  //   document.getElementsByClassName("invalid-input").item(0).innerHTML = "Email is not valid";
  //   document.getElementsByClassName("invalid-input").item(0).style.color = "red";
  //   document.getElementById("Username").focus();
  //   return false;
  // }

  //FUNCTION TO VALIDATE EMAIL ADDRESS
  // function validateEmail(email) {
  //   const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  //   return re.test(email);
  // }

  return true;
}
