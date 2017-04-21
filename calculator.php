<!--
							An Easy Usage Calculator By An0n 3xPloiTeR ^_^ 
							 Editing Author's Name Won't Make You One :D 
							 	Its Not An Ordinary Calculator ^_^
							 	    Its An0n 3xPloiTeR's Calc :)
							  			~ An0n 3xPloiTeR
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>An0n 3xPloiTeR's Calculator</title>
		<style>
			body {
				background-color: #080510;
			}
			.heading {
				font-family: cursive;
				font-size: 300%;
				color: red;
				text-align: center;
			}
			.calculator {
				font-family: cursive;
				font-size: 110%;
				color: white;
				text-align: center;
				margin-top: 10vh;
			}
			input {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 110%;
			}
			select {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 95%;
			}
			option {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 95%;
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font>An0n 3xPloiTeR's Calculator</font>
		</div>
		<div class="calculator">
			<form action="" method="POST">
				<input type="text" name="first_input" placeholder="First Number Here" size="20" />&nbsp;&nbsp;&nbsp;
				<input type="text" name="second_input" placeholder="Second Number Here" size="20" />&nbsp;&nbsp;&nbsp;
				<select name="function">
					<option>Add</option>
					<option>Subtract</option>
					<option>Multiply</option>
					<option>Divide</option>
				</select><br><br>
				<input type="submit" name="submit" value="Submit" />
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$input_1 = htmlspecialchars($_POST['first_input']);
					$input_2 = htmlspecialchars($_POST['second_input']);
					$operator = $_POST['function'];

					if (empty($input_1)) {
						die("<br><br>Please Enter The First Number ^_^");
					}

					if (empty($input_2)) {
						die("<br><br>Please Enter The Second Number ^_^");
					}

					if (!is_numeric($input_1)) {
						die("<br><br>I Created Calculator For Adding, Subtracting, Multiplying, Dividing Numbers Not Alphabets -_-");
					}

					if (!is_numeric($input_2)) {
						die("<br><br>I Created Calculator For Adding, Subtracting, Multiplying, Dividing Numbers Not Alphabets -_-");
					}
s

					if (strchr($input_1, "&gt;")) {
						die("<br><br>You Aren't Allowed To Use > In The Please Of Number");
					}

					if (strchr($input_1, "&lt;")) {
						die("<br><br>You Aren't Allowed To Use < In The Place Of Number");
					}

					if (strchr($input_2, "&gt;")) {
						die("<br><br>You Aren't Allowed To Use > In The Please Of Number");
					}

					if (strchr($input_2, "&lt;")) {
						die("<br><br>You Aren't Allowed To Use < In The Place Of Number");
					}

					if (strlen($input_1) < 9) {
						die("<br><br>Go Buy A Calculator Please :/<br>Its A Free Calculator You Cant Use More then 9 Digits -_-");
					}

					if (strlen($input_2) < 9) {
						die("<br><br>Go Buy A Calculator Please :/<br>Its A Free Calculator You Cant Use More then 9 Digits -_-");
					}

					switch ($operator) {
						case 'Add':
							$adding = $input_1 + $input_2;
							echo "<br><br>Result:<br> " . $adding;
						break;

						case 'Subtract':
							$subtracting = $input_1 - $input_2;
							echo "<br><br>Result:<br> " . $subtracting;
						break;

						case 'Multiply':
							$multiply = $input_1 * $input_2;
							echo "<br><br>Result:<br>" . $multiply;
						break;

						case 'Divide':
							$divide = $input_1 / $input_2;
							echo "<br><br>Result:<br>" . $divide;
						break;
					}
				}
			?>
		</div>
	</body>
</html>