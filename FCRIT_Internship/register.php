<?php
if(empty($_POST['name']) || empty($_POST['branch']) || empty($_POST['Sem']) || empty($_POST['rno']) || empty($_POST['pno']) || empty($_POST['email'])){
     die("Please fill all the Details.");
}
else{
$name = $_POST['name'];
$branch = $_POST['branch'];
$sem = $_POST['Sem'];
$rno = $_POST['rno'];
$pno = $_POST['pno'];
$email = $_POST['email'];
$conn = new mysqli('localhost','root','4803','registration');
}
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    $stm = $conn->prepare("insert into data(name, branch, sem, rno, pno, email)
    values(?,?,?,?,?,?)");
    $stm->bind_param("ssiiis",$name,$branch,$sem,$rno,$pno,$email);
    $stm->execute();
    echo "Registered Successfully!";
    $stm->close();
    $conn->close();
}
?>