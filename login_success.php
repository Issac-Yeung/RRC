<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - New Post';
  $g_page = 'create';
  require 'header.php';
  require 'menu.php';
?>
<div id="all_blogs">
<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();

if(!isset($_SESSION['username'])){
	header("location:index.php");
}
?>
You have successfully logged in 
<?php
  require 'footer.php';
?>