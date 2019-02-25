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
						
			$url = $_SERVER['REQUEST_URI'];
			$validURL = str_replace("&","&amp;",$url);
			$first = substr($validURL, strrpos($validURL, '?')+1);

			if($first == "explore=AI")
			{
				mysqli_set_charset($db, 'utf8');
				$sql = "SELECT * FROM user, share, post WHERE user.userName=share.userId AND post.id=share.postId AND post.opportunity LIKE 'V_AI'";
				$result = mysqli_query($db, $sql);

				while($rows = mysqli_fetch_array($result))
				{
					echo
					"
						<div class='main_frame'>

							<div class='top'>
								<span class='cat'>
									{$rows['opportunity']}
								</span>
								<span class='user'>
									{$rows['userName']}
								</span>
							</div>

							<div class='title'>
								{$rows['title']}
							</div>
							<div class='text'>".
								nl2br($rows['text']).
							"
							</div>

							<div class='comment'>
								<a href='valami.php'>Comment</a>
							</div>

						</div>
					";
				}
			}
			else if($first == "explore=java")
			{
				mysqli_set_charset($db, 'utf8');
				$sql = "SELECT * FROM user, share, post WHERE user.userName=share.userId AND post.id=share.postId AND post.opportunity LIKE 'V_java'";
				$result = mysqli_query($db, $sql);

				while($rows = mysqli_fetch_array($result))
				{
					echo
					"
						<div class='main_frame'>

							<div class='top'>
								<span class='cat'>
									{$rows['opportunity']}
								</span>
								<span class='user'>
									{$rows['userName']}
								</span>
							</div>

							<div class='title'>
								{$rows['title']}
							</div>
							<div class='text'>".
								nl2br($rows['text']).
							"
							</div>

							<div class='comment'>
								<a href='valami.php'>Comment</a>
							</div>

						</div>
					";
				}
			}
			else if($first == "explore=python")
			{
				mysqli_set_charset($db, 'utf8');
				$sql = "SELECT * FROM user, share, post WHERE user.userName=share.userId AND post.id=share.postId AND post.opportunity LIKE 'V_python'";
				$result = mysqli_query($db, $sql);

				while($rows = mysqli_fetch_array($result))
				{
					echo
					"
						<div class='main_frame'>

							<div class='top'>
								<span class='cat'>
									{$rows['opportunity']}
								</span>
								<span class='user'>
									{$rows['userName']}
								</span>
							</div>

							<div class='title'>
								{$rows['title']}
							</div>
							<div class='text'>".
								nl2br($rows['text']).
							"
							</div>

							<div class='comment'>
								<a href='valami.php'>Comment</a>
							</div>

						</div>
					";
				}
			}
			else
			{
				mysqli_set_charset($db, 'utf8');
				$sql = "SELECT * FROM user, share, post WHERE user.userName=share.userId AND post.id=share.postId";
				$result = mysqli_query($db, $sql);

				while($rows = mysqli_fetch_array($result))
				{
					echo
					"
						<div class='main_frame'>

							<div class='top'>
								<span class='cat'>
									{$rows['opportunity']}
								</span>
								<span class='user'>
									{$rows['userName']}
								</span>
							</div>


							<div class='title'>
								{$rows['title']}
							</div>
							<div class='text'>".
								nl2br($rows['text']).
							"
							</div>
							
							<div class='comment'>
								<a href='valami.php'>Comment</a>
							</div>

						</div>
					";
				}
			}	
		?>

		<?php include("footer.php"); ?>
	</body>
</html>
