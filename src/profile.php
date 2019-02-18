<?php session_start(); include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile of <?php echo "{$_SESSION['name']}"; ?></title>
	<meta charset="utf-8">
	<meta lang="en">
</head>
<body>

	<div class="profile_pic" align="center">
	    <img src="<?php echo $path; ?>" id="profile_pic" class="image">
	    <div class="middle" align="center">
	        <div class="text"><a onclick="clicked()">Change</a></div>
	    </div>
	</div>

	<div id="upload" class="upload" hidden="hidden" align="center">
	    
	    <form action="profile.php" method="POST" enctype="multipart/form-data" align="center">
	    <input type="file" id="real-file" name="real-file" hidden />
	    <button type="button" id="custom-button">Choose an image</button>
	    <span id="custom-text">No image chosen.</span>
	    <input type="submit" value="Upload" name="submit" id="submit" hidden="hidden">

	    <script type="text/javascript"> 
	        function clicked() {
	            document.getElementById("upload").removeAttribute("hidden");
	        }

	        const realFileBtn = document.getElementById("real-file");
	        const customBtn = document.getElementById("custom-button");
	        const customTxt = document.getElementById("custom-text");

	        customBtn.addEventListener("click", function() {
	            realFileBtn.click();
	        });

	        realFileBtn.addEventListener("change", function() {
	            if (realFileBtn.value) {
	                customTxt.innerHTML = "Image chosen.";
	                document.getElementById("submit").removeAttribute("hidden");

	            } else {
	                customTxt.innerHTML = "No image chosen.";
	            }
	        });


	    </script>

	</form>



	</div>

</body>
</html>
