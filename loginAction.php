<?php


if(isset($_POST['username']) && strlen($_POST['username']) > 0){
  $enteredUsername = $_POST['username'];
}else{
  header("Location: loginFail.php");
}


if(isset($_POST['password']) && strlen($_POST['password']) > 0){
  $enteredPassword = $_POST['password'];
}else{
  header("Location: loginFail.php");
}



require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
try{
  $db = new PDO($conn_string, $username, $password);
  
  $hashed = hash('sha512', $enteredPassword);
  $stmt = $db->query("SELECT * FROM projectAccounts WHERE username = '$enteredUsername' && password = '$hashed'");
  $result = $stmt->fetch();  
  
  if($result['username'] == $enteredUsername && $result['password'] == $hashed){
    header("Location: dashboard.php");
  } else {
    header("Location: loginFail.php");
  }
  
}catch (Exception $e){
  echo $e->getMessage();
  exit("Something went wrong");
}  
?>