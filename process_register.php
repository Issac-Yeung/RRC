<?php

ob_start(); // session management

require('databaseconnection.php'); 

$tbl_name="members"; // Table name if you wish to use a variable

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$encrypted_password = password_hash($mypassword, PASSWORD_DEFAULT);

$insert_sql="insert into members (username,password) values (:myusername,:encrypted_password)";
$statement = $db->prepare($insert_sql);
$statement->bindParam(':myusername',$myusername);
$statement->bindParam(':encrypted_password',$encrypted_password);
$statement->execute() or die(print_r($statement->errorInfo(), true));
$pass = $statement->fetch();

echo "Registered";
header("refresh:3; url=main_login.php");

// Again, we should never see this in a production environment
printf("<br />SQL statement is $insert_sql");
ob_end_flush();
?>

