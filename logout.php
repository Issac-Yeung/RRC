<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - New Post';
  $g_page = 'logout';
  require 'header.php';
  require 'menu.php';
?>
<?php 
// Put this code in first line of web page. 
session_start();
if(isset($_SESSION['username'])) { 
    unset($_SESSION['username']);
}
session_destroy();

echo "Session Username is ".$_SESSION['username'];
header("location:index.php");
?>
<?php
  require 'footer.php';
?>