function validate(){
    var msg = "Please enter all the Details."
    if(document.getElementsByName('name').value ==""){
     alert(msg);
     return false;
    }
}