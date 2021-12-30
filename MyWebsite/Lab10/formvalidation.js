
//Validate add user form
function userValidateForm() {
    
  let rtn = true;
  
  // Get the value of the input field with id="numb"
  let email = document.forms["adduser"]["email"].value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (email === "") {
    text = "Input not valid";
    rtn = false;
  }else{ 
   text="";
  }
  document.getElementById("email").innerHTML = text;
  
    
  //Check first and last name
  let name = [];
  name[0] = document.forms["adduser"]["fname"].value;
  name[1] = document.forms["adduser"]["lname"].value;
  for(let i = 0; i < name.length; i++){
      if (name[i] === "") {
          alert("First and Last name must be filled out");
          rtn = false;
      }
  }
  
  //Pop up message if successful
  if (rtn === true){
      window.alert("Success! User has been added.");
  }
  return rtn;
}