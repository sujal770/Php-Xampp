<?php
$email= $_POST['email'];
$password= $_POST['password'];
$gender= $_POST['gender'];
$country= $_POST['country'];
$phonenumber= $_POST['phonenumber'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  die('connection failed  :'.$conn->connect_error);

}
else{
  $stmt =$conn-> prepare("Insert into registration (email,password,gender,country,phonenumber)values(?,?,?,?,?)");
  $stmt->bind_param("ssssi",$email, $password,$gender,$country, $password);
  $stmt->execute();
  echo" Registration successfully";
  $stmt->close();
  $conn->close();
}

