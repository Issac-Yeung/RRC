<?php
ob_start(); // session management

require('databaseconnection.php'); 

$mypassword=$_POST['password'];

$select_sql = "SELECT password FROM members WHERE username=:username;";
$statement = $db->prepare($select_sql);
$statement->bindParam(':username',$_POST['username']);
$statement->execute();
$pass = $statement->fetch();

$returnedpassword=$pass['password']; // encrypted password from db here!
	
$checkpassword = password_verify($mypassword, $returnedpassword);

// If returned password matches entered password, valid login
if($checkpassword){
	// Register $myusername and redirect to file "login_success.php"
	session_start();
	$_SESSION['username'] = $_POST['username'];
	
	// the following will be used for brute force attacks in the future
	echo "Successful login as: ".$_SESSION['username'];
	header("refresh:3; url=login_success.php");
}
else {
	echo "Wrong Username or Password";
	// the following code should never be seen in a production website
	echo "<pre>$select_sql</pre>";
	echo "<pre>";
	print_r($pass);
	echo "<br /> password based on form: ".$mypassword;
	echo "<br /> password from database: ".$returnedpassword;
	// These are the hashed password's components
	// password_verify will use this info to recreate the hash created by 
// password_hash().  This works because we know it uses bcrypt
	$algo = substr($returnedpassword, 0, 4); // $2y$ == Blowfish/bcrypt
	echo "<br />          password algo: ".$algo;
	$cost = substr($returnedpassword, 4, 2);
	echo "<br />          password cost: ".$cost;
	$salt = substr($returnedpassword, 7, 22);
	echo "<br />          password salt: ".$salt;
	$hash = substr($returnedpassword, 29);
	echo "<br />          password hash: ".$hash;
	
	// recreate hash from the form password and stored hash components
	$rehash_args=$algo.$cost."$".$salt;
	echo "<br />   form password hashed: ".crypt($mypassword, $rehash_args);
	echo "</pre>";
}
ob_end_flush();
?>
