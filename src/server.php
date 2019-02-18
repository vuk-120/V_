<!--This php file will contain the actions-->
<?php 
	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','szoftmenprojekt');

	$last_name="";
	$first_name="";
	$username="";
	$e_mail="";
	$password_1="";
	$password_2="";
	$errors=array();
	
	$db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	//registration
	if(isset($_POST['register_btn']))
	{
		//requesting datas
		$last_name = mysqli_real_escape_string($db, $_POST['regLast']);
		$first_name = mysqli_real_escape_string($db, $_POST['regFirst']);
		$username = mysqli_real_escape_string($db, $_POST['register_username']);
		$e_mail = mysqli_real_escape_string($db, $_POST['register_email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['register_pwd']);
		$password_2 = mysqli_real_escape_string($db, $_POST['register_pwdagain']);
		
		//emptiness test
		if(empty($last_name))
		{
			array_push($errors,"The last name is empty");
		}
		if(empty($first_name))
		{
			array_push($errors,"The first name is empty");
		}
		if(empty($username))
		{
			array_push($errors,"The user name is empty");
		}
		
		//e-mail + format check
		if(empty($e_mail))
		{
			array_push($errors,"The e-mail is empty");

			$emailReg=$_POST['register_email'];
			if(!filter_var($emailReg, FILTER_VALIDATE_EMAIL)==true)
			{
				array_push($errors, "Your e-mail format isn't correct");
			}
		}

		if(empty($password_1))
		{
			array_push($errors,"The password is empty");
		}
		
		//passwords matching test
		if($password_1 != $password_2)
		{
			array_push($errors,"The passwords doesn't match");
		}
		
		//upload values to SQL server + redirect to home page
		if(count($errors) == 0)
		{
			$password=md5($password_1);
			$sql="INSERT INTO user(userName, eMail, password, lastName, firstName) VALUES ('$username', '$e_mail', '$password', '$last_name', '$first_name')";
			mysqli_query($db, $sql);

			$_SESSION['name'] = $username;
			$_SESSION['success'] = true;
			header('location: home.php');
		}
	}

	//sign in
	if(isset($_POST['logInBtn']))
	{
		$userID=($_POST['signin_email']);
		$userPswrd=($_POST['signin_pwd']);
	
		//emptiness text
		if(empty($userID))
		{
			array_push($errors,"The email is empty");
		}
		if(empty($userPswrd))
		{
			array_push($errors,"The password is empty");
		}

		//sign in implement
		if(count($errors) == 0)
		{
			$userPswrd = md5($userPswrd);
			$query="SELECT * FROM user WHERE eMail='$userID' AND password='$userPswrd'";
			$result=mysqli_query($db, $query);
			$rows =	mysqli_fetch_array($result);

			$username=$rows['userName'];
			
			if($rows['eMail'] == $userID && $rows['password'] == $userPswrd)
			{
				$_SESSION['name'] = $username;
				$_SESSION['success'] = true;
				header('location: home.php');
			}
			else 
			{
				array_push($errors, "Incorrect password or e-mail");
			}
		}
	}

	//write post
	if(isset($_POST['publish']))
	{
		$id = "";
		$title="";
		$text="";
		$oppo="";

		$sql = "SELECT count(id) AS total FROM post;";
		$query = mysqli_query($db, $sql);
		while($rows = mysqli_fetch_array($query))
		{
			$id = $rows['total'];
		}
		
		$newId = $id + 1;

		$title = mysqli_real_escape_string($db, $_POST['title']);
		$text = mysqli_real_escape_string($db, $_POST['post']);

		$oppo=$_POST['selectOption'];

		$upload="INSERT INTO post(id, title, text, opportunity) VALUES ('$newId', '$title', '$text', '$oppo')";
		mysqli_query($db, $upload);
		
		$date = date('Y-m-d H:i:s');
		$user = $_SESSION['name'];
		$upload2="INSERT INTO share(userId, postId, comId, date, likeId) VALUES ('$user', '$newId', NULL, '$date','0')";
		mysqli_query($db, $upload2);	

					
	}
	
 ?>
