<!DOCTYPE html><?php // A Simple Calculator By An0n 3xPloiTeR ^_^ ?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>An0n 3xPloiTeR's Calculator</title>
		<meta name="author" content="An0n 3xPloiTeR, Syed Umar Arfeen" />
		<link rel="stylesheet" href="style.css" media="screen">
	</head>
	<body>
		<div class="heading">
			<font>An0n 3xPloiTeR's Calculator</font>
		</div>
		<div class="calculator">
			<form action="mathOperation.php" method="POST">
				<input type="number" name="first_input" placeholder="First Number Here" size="20" />&nbsp;&nbsp;&nbsp;
				<input type="number" name="second_input" placeholder="Second Number Here" size="20" />&nbsp;&nbsp;&nbsp;
				<select name="function">
					<option>Add</option>
					<option>Subtract</option>
					<option>Multiply</option>
					<option>Divide</option>
					<option>Square</option>
					<option>Square Root</option>
				</select><br><br><input type="reset" value="Reset">
				<input type="submit" name="submit" value="Submit" />
			</form>
			
		</div>
		<div class="footer">
			<footer>
				<hr>
					<font>Developed By 
						<a href="https://www.google.com/search?q=An0n 3xPloiTeR" target="_blank">An0n 3xPloiTeR</a>
					</font>
				<hr>
			</footer>
<!--  Give a Visit :D  -->
		</div>
	</body>
</html>
