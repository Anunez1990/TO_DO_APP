function signUpValidation() {
    //------------Hide the error message everytime the form is validated---------------
    for(var j=0;j<5;j++){
        document.getElementsByClassName("invalid-input").item(j).innerHTML="";
    }//--------------------------------------------------------------------------------

    
    // ------------------USERNAME VALIDATION-----------------
    var username; //variable to check username validation
    var index1=0; //index for the error message for the username
    var id1="Username"; //Id from the Username's input text
    var uname = document.forms["loginForm"]["username"].value; //Get the username from the html file
    
    //call function to validate username
    username=usernameValidation(uname,index1,id1);

    // ----------------------EMAIL VALIDATION------------------------
    var email; //variable to check email validation
    var index2=1; //index for the error message for the email
    var id2="Email";//Id from the Email's input text
    var emailvalue = document.forms["loginForm"]["email"].value; //get the value of the email
   
    //call the function to validate the email
    email=emailValidation(emailvalue,index2,id2);

    // ----------------------PASSWORD VALIDATION------------------------
    var password; //variable to check password validation
    var index3=2; //index for the error message for the password
    var id3="Password";//Id from the password's input text
    var passwordvalue= document.forms["loginForm"]["password"].value; //get the value of the password
   
    //call the function to validate the password
    password=passwordValidation(passwordvalue,index3,id3);

 
    // ----------------------FIRST NAME VALIDATION------------------------
    var firstname; //variable to check first name validation
    var index4=3; //index for the error message for the email
    var id4="FirstName";//Id from the First name's input text
    var fname= document.forms["loginForm"]["fname"].value; //get the value of the first name
   
    //call the function to validate first name
    firstname=fnameValidation(fname,index4,id4);
 
   // ----------------------LAST NAME VALIDATION------------------------
    var lastname;//variable to check first name validation
    var index5=4; //index for the error message for the lastname
    var id5="LastName";//Id from the Last name's input text
    var lname= document.forms["loginForm"]["lname"].value; //get the value of the last name
   
    //call the function to validate last name
    lastname=lnameValidation(lname,index5,id5);
    
    if(username&&email&&password&&firstname&&lastname){
        return true;
    }else{
        return false;
    }

}

