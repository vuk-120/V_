
<?php 
	session_start();
	include("server.php");
 ?>
<!DOCTYPE html lang="en">
<html>
	<head>
		<title>V_</title>
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<meta lang="en">
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>

	<!--Sign in bar of index.php-->

	<form method="POST" action="index.php">
			<nav>
				<ul class="left">
					<li>
						<h1>
							<a href="index.php">V_</a>
						</h1>
					</li>
				</ul>

				<ul class="right">
					
					<li>
						<input type="text" name="signin_email" placeholder="E-mail">
					</li>
					<li>
						<input type="password" name="signin_pwd" placeholder="Password">
					</li>
					<li>
						<input type="submit" name="logInBtn" value="Sign in">
					</li>
				</ul>
			</nav>
		</form>

	<!--Welcome and register-->

		<div class="welcome">
			<h1>V_</h1>
			<h5>Everything coding</h5>
		</div>

		<div class="content">
			<form method="POST" action="index.php">
				<table>
					<tbody>
						<?php include("error.php") ?>
						<tr>
							<td>
								First name        
							</td>
							<td>
								<input type="text" name="regFirst" value="<?php echo $first_name; ?>">
							</td>
						</tr>

						<tr>
							<td>
								Last name
							</td>
							<td>
								<input type="text" name="regLast" value="<?php echo $last_name; ?>">
							</td>
						</tr>

						<tr>
							<td>
								User name
							</td>
							<td>
								<input type="text" name="register_username" value="<?php echo $username; ?>">
							</td>
						</tr>

						<tr>
							<td>
								E-mail
							</td>
							<td>
								<input type="email" name="register_email" value="<?php echo $e_mail; ?>">
							</td>
						</tr>

						<tr>
							<td>
								Password
							</td>
							<td>
								<input type="password" name="register_pwd">
							</td>
						</tr>
	
						<tr>
							<td>
								Password again
							</td>
							<td>
								<input type="password" name="register_pwdagain">
							</td>
						</tr>
						
						<tr>
							<td class="btn" colspan="2">
								<input type="submit" name="register_btn" value="Register" id="register_btn">
							</td>
					</tbody>
				</table>
			</form>
		</div>

	<!----Footer---->
	<?php include("footer.php") ?>

	</body>
</html>
