<?php 
	session_start();
	include_once("server.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/menuBar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>
			V_ Home 
		</title>
	</head>
	<body>
		<?php include("menu.php"); ?>

		<?php 
			mysqli_set_charset($db, 'utf8');
			$sql = "SELECT * FROM user, share, post WHERE user.userName=share.userId AND post.id=share.postId";
			$result = mysqli_query($db, $sql);
			while($rows = mysqli_fetch_array($result))
			{
				echo
				"
					<div class='main_frame'>
						<div class='title'>
							oppu: {$rows['opportunity']}
						</div>
						<div class='user'>
							username: {$rows['userName']}
						</div>
						<div class='title'>
							title: {$rows['title']}
						</div>
						<div class='text'>
							text: {$rows['text']}
						</div>
					</div>
				";
			}	
		?>

		<?php include("footer.php"); ?>
	</body>
</html>
