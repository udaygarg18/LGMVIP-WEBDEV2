function validateForm(){
    var returnval = true;
    clearErrors();
 var name = document.forms['myForm']["name"].value;
    if (name.length<5){
        seterror("name", "*Length of name is too short");
        returnval = false;
    }
 return returnval;
}