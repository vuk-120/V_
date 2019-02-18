<?php 
	session_start();
	include("server.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Write Post</title>
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/menuBar.css">
		<link rel="stylesheet" type="text/css" href="css/writePost.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta lang="en">
	</head>
	<body>

		<?php 
			include("menu.php");
			include("footer.php");
		?>

	</br></br></br>

		<div class="main_frame">
			<form method="POST" action="writepost.php">
				<div class="custom-select">
					<select name="selectOption">
						<option value="V_main">
							V_main
						</option>
						<option value="V_java">
							V_java
						</option>
						<option value="V_python">
							V_python
						</option>
						<option value="V_AI">
							V_AI
						</option>
					</select>
				</div>
				<div class="title">
					<input type="text" name="title" placeholder="Enter Title">
				</div>
				<div class="post">
					<textarea  name="post" placeholder="Write Your Post Here"></textarea>
				</div>
				<div class="publish">
					<input type="submit" name="publish" value="Publish" class="form">
				</div>
			</form>
		</div>

		<script>
			var x, i, j, selElmnt, a, b, c;
			/*look for any elements with the class "custom-select":*/
			x = document.getElementsByClassName("custom-select");
			for (i = 0; i < x.length; i++) 
			{
				selElmnt = x[i].getElementsByTagName("select")[0];
				/*for each element, create a new DIV that will act as the selected item:*/
				a = document.createElement("DIV");
				a.setAttribute("class", "select-selected");
				a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
				x[i].appendChild(a);
				/*for each element, create a new DIV that will contain the option list:*/
				b = document.createElement("DIV");
				b.setAttribute("class", "select-items select-hide");
				for (j = 1; j < selElmnt.length; j++) 
				{
		    		/*for each option in the original select element,
		    		create a new DIV that will act as an option item:*/
		    		c = document.createElement("DIV");
		    		c.innerHTML = selElmnt.options[j].innerHTML;
		    		c.addEventListener("click", function(e) 
		    		{
		    		    /*when an item is clicked, update the original select box, and the selected item:*/
		        		var y, i, k, s, h;
		        		s = this.parentNode.parentNode.getElementsByTagName("select")[0];
		        		h = this.parentNode.previousSibling;
		        		for (i = 0; i < s.length; i++) 
		        		{
		        			if (s.options[i].innerHTML == this.innerHTML)
		        			{
		            			s.selectedIndex = i;
		            			h.innerHTML = this.innerHTML;
		            			y = this.parentNode.getElementsByClassName("same-as-selected");
		            			for (k = 0; k < y.length; k++) 
		            			{
		            				y[k].removeAttribute("class");
		            			}
		            			this.setAttribute("class", "same-as-selected");
		            			break;
		          			}
		        		}
		        		h.click();
		    		});
		    		b.appendChild(c);
				}
		  		x[i].appendChild(b);
		  		a.addEventListener("click", function(e) 
		  		{
		    		/*when the select box is clicked, close any other select boxes, and open/close the current select box:*/
		    		e.stopPropagation();
		    		closeAllSelect(this);
		    		this.nextSibling.classList.toggle("select-hide");
		    		this.classList.toggle("select-arrow-active");
		    	});
			}
			function closeAllSelect(elmnt)
			{
				/*a function that will close all select boxes in the document, except the current select box:*/
		  		var x, y, i, arrNo = [];
				x = document.getElementsByClassName("select-items");
				y = document.getElementsByClassName("select-selected");
				for (i = 0; i < y.length; i++)
				{
		    		if (elmnt == y[i])
		    		{
		    			arrNo.push(i)
		    		}
		    		else 
		    		{
		    			y[i].classList.remove("select-arrow-active");
	    			}
				}
		 		for (i = 0; i < x.length; i++)
		 		{
		    		if (arrNo.indexOf(i))
		    		{
		    			x[i].classList.add("select-hide");
		    		}
		  		}
			}
			/*if the user clicks anywhere outside the select box,
			then close all select boxes:*/
			document.addEventListener("click", closeAllSelect);
		</script>
		
	</body>
</html>
