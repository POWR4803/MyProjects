function validate(){
    var msg = "Please enter all the Details."
    if(document.getElementById('name').value =="" ||document.getElementById('branch').value =="" ||document.getElementById('Sem').value =="" ||
    document.getElementById('rno').value =="" ||document.getElementById('pno').value =="" ||document.getElementById('email').value ==""){
     alert(msg);
     return false;
    }
}