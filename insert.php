
<?php

if(isset($_POST['fname'])) {
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $password = $_POST['pwd'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
}
  //connection db
  $conn = new mysqli('localhost','root','','magomeni');
  if($conn->connect_error){
  	die('failed' .$conn->connect_error);
  }else{
  	$stmt = $conn->prepare("insert into registration(firstname,lastname,password,email,gender)VALUES(?,?,?,?,?)");
  	$stmt->bind_param("sssss",$firstname,$lastname, $password,  $email, $gender);
  	$stmt->execute();
  	echo "hello you insert data succefull";
  	$stmt->close();
  	$conn->close();
  }






?>