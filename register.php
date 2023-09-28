<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - New Post';
  $g_page = 'register';
  require 'header.php';
  require 'menu.php';
?>
<div id="all_blogs">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form1" method="post" action="process_register.php">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
						<td colspan="3"><strong>Member Register </strong></td>
					</tr>
					<tr>
						<td width="78">Username</td>
						<td width="6">:</td>
						<td width="294"><input name="username" type="text" id="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" type="text" id="password"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Submit" value="Register"></td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>
<?php
  require 'footer.php';
?>