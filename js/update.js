 function editUsername(){
    document.forms["updateForm"]["action"].value="edit_Username";
    document.getElementById("confirmPsw").style.display="block";
    document.getElementById("Password").disabled=true;
    document.getElementById("Username").disabled=false;
    document.getElementById("Username").value="";
    document.getElementById("Username").focus();
    document.getElementById("main-error").innerHTML="";
  // Update the visible label when switching to username edit mode
  var userLabel = document.getElementById("username-label") || document.querySelector('label[for="Username"] b');
  if (userLabel) {
    userLabel.textContent = "New Username";
    userLabel.style.color = "#ffffff";
  }
  // Update the username input placeholder as a visual hint
  var userInput = document.getElementById("Username");
  if (userInput) userInput.placeholder = "Enter New Username";

  }

  function editPassword(){
    document.forms["updateForm"]["action"].value="edit_Password";
    document.getElementById("confirmPsw").style.display="block";
    document.getElementById("Username").disabled=true;
    document.getElementById("Password").disabled=false;
    document.getElementById("Password").value="";
    document.getElementById("Password").focus();
    document.getElementById("main-error").innerHTML="";
    // Update the visible label when switching to password edit mode
    var pwLabel = document.getElementById("password-label") || document.querySelector('label[for="Password"] b');
    if (pwLabel) {
      pwLabel.textContent = "New Password";
      pwLabel.style.color = "#ffffff";
    }
    // Update the password input placeholder as a visual hint
    var pwInput = document.getElementById("Password");
    if (pwInput) pwInput.placeholder = "Enter New Password";
    alert("Your new password must contain at least 8 characters, including uppercase, lowercase letters, numbers and special characters.");
  }
    
  function updateValidation(){

    //------------Hide the error message everytime the form is validated---------------
    for(var j=0;j<3;j++){
        document.getElementsByClassName("invalid-input").item(j).innerHTML="";
    }//--------------------------------------------------------------------------------

    var action= document.forms["updateForm"]["action"].value
    var previousPassword= document.forms["updateForm"]["previousPassword"].value
    var confirmPassword= document.forms["updateForm"]["confirmPassword"].value

    if(action=="edit_Username"){
      
      var username; //variable to check username validation
      var index=0; //index for the error message for the username
      var id="Username"; //Id from the Username's input text
      var uname = document.forms["updateForm"]["username"].value; //Get the username from the html file
    
      //call function to validate username
      username=usernameValidation(uname,index,id);

       //If the inserted username is valid require to confirm the password to update the username
      if(username){
        if(previousPassword==confirmPassword){
              return true;
        }else{
              error(2,"Password is incorrect","confirmPassword");
              return false;
        }
      }else{
        return false;
      }

    }else{
      // ------------------PASSWORD VALIDATION-----------------
      var password; //variable to check username validation
      var index=1; //index for the error message for the username
      var id="Password"; //Id from the Username's input text
      var psw = document.forms["updateForm"]["password"].value; //Get the username from the html file
    
      //call function to validate username
      password=passwordValidation(psw,index,id);

      //If the inserted password is valid check if it is the same as the previous one
      if(password){
        if(psw==previousPassword){
            //if it is the same as the previous password return a error message
           error(1,"Password can not be the same as the previous password","Password");
           return false;
        }else{
          //if the password is diferent check if confirm the password to update the new password
          if(previousPassword==confirmPassword){
              return true;
          }else{
              error(2,"Password is incorrect","confirmPassword");
              return false;
          }
        }  
      }else{
          return false;
      }
    }
  }
