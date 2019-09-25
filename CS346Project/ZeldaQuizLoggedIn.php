<?php session_start(); ?>
<!DOCTYPE HTML>
<?php error_reporting(E_ALL | E_STRICT); ?>
<html lang = "en">
<head>
	<title> The Great Zelda Personality Inventory </title>
	<!-- Zelda Personality Inventory home page logged in -->
	<meta charset = "UTF-8">
	<meta name = "description" content = "Zelda Personality Inventory home page logged">
	<meta name = "keywords" content = "legend_of_zelda, personality, character, quiz">
	<meta name="author" content="Mayo" >
	<link rel = "stylesheet" type = "text/css" href = "ZeldaQuiz.css">
</head>
<body class = "phpeabody">
<?php
	$db = new PDO("mysql:dbname=mayoj72;host=localhost",
				  "mayoj72", "Rin6Toesock4");
	$username = (string)$_POST["username"];
	$pass = (string)$_POST["password"];
	$encryptedPass = crypt($pass, $username);
	$queryUser = "SELECT `username` FROM `ZeldaQuizUsers` WHERE `username` = '$username'";
	$queryPass = "SELECT `password` FROM `ZeldaQuizUsers` WHERE `password` = '$encryptedPass'";
	$resultUser = $db->prepare($queryUser);
	$resultPass = $db->prepare($queryPass);
	$resultUser->execute();
	$resultPass->execute();
	if ($resultUser->rowCount() == 0 || $resultPass->rowCount() == 0)
	{
		?>
		    <h1> Account not found </h1>
		    <a href = "ZeldaQuizHome.html"> Try again </a>
			<br />
			<br />
			<a href = "ZeldaQuizSignup.html"> Sign up </a>
			<br />
			<br />
		<?php
	}
	else
	{
		?>
		<h1 id = "homeHead">
			The Great Zelda Personality Inventory
		</h1>
		<h1> Welcome, <?= $username ?>! </h1>
		<div id = "navMenu">
			<h4>
				Current Character Results
			</h4>
			<ul>
				<li> <a href = "Link.html"> Link </a></li>
				<li> <a href = "Navi.html"> Navi </a></li>
				<li> <a href = "Zelda.html"> Princess Zelda </a></li>
				<li> <a href = "Ganondorf.html"> Ganondorf </a></li>
				<li> <a href = "Rauru.html"> Rauru </a></li>
				<li> <a href = "Saria.html"> Saria </a></li>
				<li> <a href = "Darunia.html"> Darunia </a></li>
				<li> <a href = "Ruto.html"> Princess Ruto </a></li>
				<li> <a href = "Impa.html"> Impa </a></li>
				<li> <a href = "Nabooru.html"> Nabooru </a></li>
			</ul>
		</div>
		<div id = "intro">
			<div>
				Welcome to the Great Zelda Personality Inventory! This is a project in its infant stage designed to be an ever-growing,
				large-scale personality inventory based on Nintendo's popular video game franchise, The Legend of Zelda. As of right now,
				the site only consists of some of the major characters from what is arguably Nintendo's most iconic game in this franchise,
				The Legend of Zelda: Ocarina of Time. The result pages have (at least for now) been written in a way such that a person who
				has never even heard of this game can get a good idea of the game's story and a look at what the characters are like
				personality-wise. All information in the character descriptions is based on the author's experience with the game. 
				All currently-existing quiz results are located in the list to the left. Happy quizzing!
				<br />
				<br />
				To find more information on the Zelda universe follow this link:
				<br />
				<a href = "http://zeldawiki.org/Main_Page"> ZeldaWiki </a>
			</div>
			<br />
			<h3>
				** Be warned; this site contains heavy spoilers **
			</h3>
			<form action = "ZeldaQuizForm.php">
				<button class = "butt">  Take the Inventory  </button>
			</form>
			<br />
			<br />
			<a href = "test.html"> Upload </a>
			<br />
			<br />
		</div>
		<form name = "logout" action = "ZeldaQuizHome.html">
			<button class = "butt"> Logout </button>
		</form>
		<br />
		<br />
		<br />
		<span class = "backgroundCredit"> *Background by wallrun@deviantart.com </span>
		<br />
		<br />
		<a href = "http://validator.w3.org/check/referer">Validate Me</a>
		<br />
		<br />
	    <?php
	}
	$db = null;
	$resultUser = null;
	$resultPass = null;
	session_write_close();
?>
</body>
</html>