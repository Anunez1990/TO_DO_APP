
//######################### (Username Validation) ####################################
function usernameValidation(username,index,id){
   
    //-----------------------Get the username from the html file--------------------------
    var uname = username;
    var unameChecker1=username_checker1(uname);

    //------------------Check if username ends or begins with non-alphanumeric characters------------------

    function username_checker1(input){
        //---------Check if the username begins or ends with period or non-alphanumeric characters-----------
        if (special_characters(input.charAt(0))||
            special_characters(input.charAt(input.length-1))||
            check_periods(input.charAt(0))||
            check_periods(input.charAt(input.length-1))){
            message="Username can't begin or end with (&, =, _, ', -, +, ,, <, >, or .)";
            error(index,message,id);
            return false;
        }else {
            return true;
        }
    }


    if(unameChecker1) {
        var unameChecker2 = username_checker2(uname);
        var unameChecker3 = username_checker3(uname);

        //------------------Function to check special characters------------------
        function username_checker2(input) {
            var schc = 0;

            for (var i = 1; i < input.length-1; i++) {
                //Check if the username contains special characters
                if (special_characters(input.charAt(i))) {
                    schc++;
                }
            }
            //If a special character was found show an error message
            if (schc > 0) {
                message="Username can't contain (&, =, _, ', -, +, ,, <, >)";
                error(index,message,id);
                return false;
            } else {
                return true;
            }
        }

        //----------------------Check two periods in a row----------------------
        function username_checker3(input){
            var countperiods=0;
            var sw=0;
            for (var i = 1; i < input.length-1; i++) {
                if(check_periods(input.charAt(i))) {
                    countperiods++;
                    if (countperiods>1){
                        sw++;
                    }
                }else{
                    countperiods=0;
                }
            }

            if(sw>0){
                message="Username can't contain more than one (.)";
                error(index,message,id);
                return false;
            }else{
                return true;
            }
        }
    }

    //------------------return if all validations are made----------------------
    if(unameChecker2 && unameChecker3){
        return true;
    }else{
        return false;
    }
} //###################### (End Username Validation) #################################

//############################## (Email Validation) ##################################
function emailValidation(email,index,id) {
    if (validateEmail(email)) {
        return true;
    }else{
        message="Email not valid";
        error(index,message,id);
        return false;
    }
}//############################# (End Email Validation) ##############################

//############################## (Password Validation) ###############################
function passwordValidation(password,index,id){   
    var psw=password; 
    var passwordChecker1=password_checker1(psw,index,id);

    function password_checker1(input,index,id) {
        if(input.length>7 && input.length<31){
            return true;
        }else{
            message="Password must contains at least 8 characters";
            error(index,message,id);
            return false;
        }
    }

    if(passwordChecker1){
        var Uppercount=0;
        var Lowercount=0;
        var numbercount=0;

        for(var i = 0; i < psw.length; i++)
        {
            //-----get each character from the password
            var chr = psw.charAt(i);

            //Check if the character is Uppercase
            if(isUppercase(chr))
            {
                Uppercount++;
            }
            //Check if the character is Lowercase
            if(isLowercase(chr))
            {
                Lowercount++;
            }
            //Check if the character is a Number
            if(isNumber(chr)){
                numbercount++;
            }
        }

        if(Uppercount<1){
            message="Password must contain at least one uppercase";
            error(index,message,id);
        }
        if(Lowercount<1){
            message="Password must contain at least one lowercase";
            error(index,message,id);
        }
        if(numbercount<1){
            message="Password must contain at least one digit";
            error(index,message,id);
        }

    }

    if((Uppercount>0)&&(Lowercount>0)&&(numbercount>0)){
            return true;
    }else{
            return false;
    }

}//############################# (End Password Validation) ###########################

//############################# (First name Validation) ##############################
function fnameValidation(fname,index,id){
    message="First name can't contain numbers";
    return name_validation(fname,index,id,message); 
}//############################# (End Fist name Validation) ##########################

//############################# (Last name Validation) ###############################
function lnameValidation(lname,index,id){
    message="Last name can't contain numbers";
    return name_validation(lname,index,id,message);

}//############################# (End Last name Validation) ##########################

//################################ Validation Functions #################################
    // -------------------------------check special characters------------------------------
    function special_characters(input){
        if(input == '&' || input== '=' || input== '_'
            || input== '\''||input== '-'||input== '+'
            ||input== ','||input== '<'||input== '>'){
            return true;
        }else{
            return false;
        }
    }

    //------------------------check if character is a period (.)------------------------------
    function check_periods(input){
        if(input=='.'){
            return true;
        }else{
            return false;
        }
    }

    //------------------------Function to show errors------------------------------
    function error(index, message,id){
        document.getElementsByClassName("invalid-input").item(index).style.display = "block";
        document.getElementsByClassName("invalid-input").item(index).innerHTML = message;
        document.getElementsByClassName("invalid-input").item(index).style.color = "red";
        document.getElementById(id).focus();
    }

    //------------------------Function to check valid email------------------------------
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    //------------------------Function to check if a character is Uppercase------------------------------
    function isUppercase(input)
    {
        if(!isNumber(input)) {
            return input === input.toUpperCase();
        }
    }
    //------------------------Function to check if a character is Lowercase------------------------------
    function isLowercase(input)
    {
        if(!isNumber(input)) {
            return input === input.toLowerCase();
        }
    }
    //------------------------Function to check if a character is a number--------------------------------
    function isNumber(input){
        if(Number.isInteger(parseInt(input))){
            return true;
        }else {
            return false;
        }
    }
    //------------------------Function to check if name contains numbers--------------------------------
    function name_validation(input,index,id,message) {
        var counter=0;
        for (var i = 0; i < input.length; i++) {
            //-----get each character from the first name
            var namech = input.charAt(i);

            //Check if the character is a Number
            if (isNumber(namech)) {
                counter++;
            }
        }

        if(counter>0){
            error(index,message,id);
            return false;
        }else{
            return true;
        }
    }

//--------------------------Accordion---------------------------------
    function myFunction(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
      } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
          x.previousElementSibling.className.replace(" w3-theme-d1", "");
      }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
    
    function message()
    {
        alert("HOLA");
    }