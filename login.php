
<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - New Post';
  $g_page = 'login';
  require 'header.php';
  require 'menu.php';
?>
<div id="all_blogs">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form1" method="post" action="checklogin.php">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
						<td colspan="3"><strong>Member Login </strong></td>
					</tr>
					<tr>
						<td width="78">Username</td>
						<td width="6">:</td>
						<td width="294"><input name="username" id="username" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" id="password" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>
</div>
<?php
  require 'footer.php';
?>