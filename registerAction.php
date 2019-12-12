<?php


if(isset($_POST['username']) && strlen($_POST['username']) > 0){
  $enteredUsername = $_POST['username'];
}else{
  header("Location: registerFail.php");
}


if(isset($_POST['password']) && strlen($_POST['password']) > 0){
  $enteredPassword = $_POST['password'];
}else{
  header("Location: registerFail.php");
}


if(isset($_POST['confirmPassword']) && strlen($_POST['confirmPassword']) > 0){
  $enteredConfirmPassword = $_POST['confirmPassword'];
}else{
  header("Location: registerFail.php");
}



require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
try{
  $db = new PDO($conn_string, $username, $password);
  
  $hashed = hash('sha512', $enteredPassword);
  if($enteredPassword == $enteredConfirmPassword){
    $insert_query = "INSERT INTO projectAccounts (id, username, password, watchedTables) VALUES (NULL, '$enteredUsername', '$hashed', NULL);";
  }
  $stmt = $db->prepare($insert_query);
  $r = $stmt->execute();
  
  if($r > 0){      
    header("Location: registerSuccess.php");
  }else{
    header("Location: registerFail.php");  
  }
}  
catch (Exception $e){
  echo $e->getMessage();
  exit("Something went wrong");
}  
?>