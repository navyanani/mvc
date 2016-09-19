<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
			<?php
			ob_start();
			  // If form submitted, insert values into the database.
			 if (isset($_POST['id'])){
			 require('dbcon.php');
			 $id = $_POST['id'];
			 
			 $title = $_POST['title'];
			 
			 $query = "INSERT INTO `news` (id, title) VALUES ('$id', '$title')";
			//var_dump($query );
			 mysqli_query($conn,$query) or die(mysqli_error());
			//echo("Error description: " . mysqli_error($conn));
			 //var_dump($result );
			 
			 echo "<h3>successfully.</h3>";
		}
			?>
			<div class="form">
			
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			
					id:<input type="id" name="id" required />  
							<br/><br/>

					title:<input type="title" name="title" placeholder="title" required />
								<br/><br/>
				
							<input type="submit" name="submit" value="submit">
				</form> 
			</div>
				
	</body>
</html>