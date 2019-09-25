<!DOCTYPE HTML>
<?php error_reporting(E_ALL | E_STRICT); ?>
<html lang = "en">
	<head>
		<title> ZeldaQuizSignupConfirm </title>
	    <!-- Sign-up confirmation page for Zelda Quiz -->
	    <meta charset = "UTF-8">
	    <meta name = "description" content = "zelda quiz project">
	    <meta name = "keywords" content = "zelda, quiz, project">
	    <meta name = "author" content = "James Mayo">
		<link rel = "stylesheet" type = "text/css" href = "ZeldaQuiz.css">
	</head>
<body class = "phpeabody">
	<?php
        $username = $_POST["username"];
		$password = $_POST["password"];
		$encryptedPass = crypt($password, $username);
		$verified = $_POST["verify"];
		$wordRegex = "^[a-zA-Z]{1,}^";
		$numRegex = "^[0-9]{1,}^";
		$symRegex = "^[\W]{1,}^";
		$db = new PDO("mysql:dbname=mayoj72;host=localhost",
				      "mayoj72", "Rin6Toesock4");
		$userQuery = "SELECT `username` FROM `ZeldaQuizUsers` WHERE `username` = '$username'";
		$usernameExists = $db->prepare($userQuery);
		$usernameExists->execute();
		// Test if signup was successful or not
		if ($password === $verified)
		{
			// Check that the entered username does not already exist
			if ($usernameExists->rowCount() == 0) {
				// Check on server-side that password is valid
				// If the password is between 8 and 24 characters
				if (strlen($password) >= 8 && strlen($password) <= 24) {
					// If the password contains at least one letter
				    if (preg_match($symRegex, $password) !== 0) {
						// If the password contains at least one number
					    if (preg_match($numRegex, $password) !== 0) {
							// If the password contains the one the above symbols
						    if (preg_match($wordRegex, $password) !== 0) {
								$insertion = $db->query("INSERT INTO `ZeldaQuizUsers` VALUES('$username', '$encryptedPass', '')");
                                ?>
			                            <h1> Signup successful </h1>
										<br />
										<br />
										<a href = "ZeldaQuizHome.html"> To Login </a>
			                    <?php
						    }
							// If the password doesn't contain a letter
							else {
							?>
			                    <h1> Invalid password: must contain at least one letter </h1>
					            <a href = "ZeldaQuizSignup.html"> Try again </a>
			                    <br />
								<br />
								<a href = "ZeldaQuizHome.html"> Home </a>
			                <?php		
							}
						}
						// If the password doesn't contain a number
						else {
						?>
			                <h1> Invalid password: must contain at least one number </h1>
					        <a href = "ZeldaQuizSignup.html"> Try again </a>
			                <br />
							<br />
							<a href = "ZeldaQuizHome.html"> Home </a>
			            <?php	
						}
                    }
					// If the password doesn't contain a symbol
					else {
				    ?>
			            <h1> Invalid password: must contain at least 
						     one of the following: ! ? $ @ * # + - = _ </h1>
					    <a href = "ZeldaQuizSignup.html"> Try again </a>
			            <br />
						<br />
						<a href = "ZeldaQuizHome.html"> Home </a>
			        <?php
					}
                }
				// If the password is too short or too long
                else {
		        ?>
			        <h1> Invalid password: must be between 8 and 24 characters long</h1>
					<a href = "ZeldaQuizSignup.html"> Try again </a>
			        <br />
					<br />
					<a href = "ZeldaQuizHome.html"> Home </a>
			    <?php
				}			
            }
			// If the username already exists
	        else
	        {
		        ?>
					<h1> Username already exists </h1>
					<a href = "ZeldaQuizSignup.html"> Try again </a>
			        <br />
					<br />
					<a href = "ZeldaQuizHome.html"> Home </a>
				<?php
	        }
		}
		// If the password does not match the verification box
		else
		{
			?>
			<h1> Password does not match verification </h1>
			<a href = "ZeldaQuizSignup.html"> Try again </a>
			<br />
			<br />
			<a href = "ZeldaQuizHome.html"> Home </a>
			<?php
		}	
		$db = null;
	    $usernameExists = null;
	?>
	<br />
	<br />
	<br />
	<span class = "backgroundCredit"> *Background by wallrun@deviantart.com </span>
	<br />
	<br />
	<a href = "http://validator.w3.org/check/referer">Validate Me</a>
	<br />
	<br />
</body>
</html>