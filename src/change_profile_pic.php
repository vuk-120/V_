<?php

	$target_dir = "";
	$target_file = "";
	$sql8 = "";

	if (isset($_POST['submit'])) {
		if (!($_FILES["real-file"]["name"] == "")) {
		$target_dir = "profile_pics/";
		$target_file = $target_dir . basename($_FILES["real-file"]["name"]);

				
		move_uploaded_file(
		$_FILES["real-file"]["tmp_name"],
		$target_file);

		$sql8 = "UPDATE users SET ProfilePic='{$target_file}' WHERE Username='{$_SESSION['userName']}'";

		if (mysqli_query($link, $sql8)) {
			header('location: profile.php');
		}
		}
	}

	
?>




				

