function validate(){
  var userName = document.getElementById("username").value;
  var passWord = document.getElementById("password").value;
  var earphoneInput = document.getElementById("earphones").value;
  var pencilInput = document.getElementById("pencil").value;
  var notebookInput = document.getElementById("notebook").value;
  var shipping = document.getElementById("shipping");
  //var shipQuan = document.getElementByName("shipping").value;
  //var checkEmail = false;
  //var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  //checkEmail= username.includes();

  //if(userName == "" && passWord == "" earphoneInput == "" && pencilInput == "" && notebookInput == "" && shipping == ""){
  //   alert("You must fill in all values!");
    // return false;
   //}
  if(userName == ""){
     alert("You must fill in a username");
     return false;
   }
   if(passWord == ""){
      alert("You must fill in a password.");
      return false;
    }
    if(earphoneInput == ""){
       alert("You must fill in an quanity amount for the item earphone.");
       return false;
     }
    if(pencilInput == ""){
        alert("You must fill in an quanity amount for the item pencils.");
        return false;
      }
    if(notebookInput == ""){
        alert("You must fill in an quanity amount for the item notebook.");
        return false;
      }
      if(!shipping.checked){
          alert("You must fill in all fields for shipping before continuing.");
          return false;
        }
   if(earphoneInput<0 || pencilInput<0 || notebookInput<0){
     alert("Invalid Input.  Values must be greater than 0.");
     return false;
  }//else if(!checkEmail){
  //  alert("You must provde a username in the form of name@domain.com");
    //return false;
  //  validate = false;
  //return validate;
  //}
}
