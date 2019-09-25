<?php
error_reporting(E_ALL | E_STRICT);
session_start();
?>
<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title> The Great Zelda Personality Inventory </title>
	    <!-- Zelda Personality Inventory home page -->
	    <meta charset = "UTF-8">
	    <meta name = "description" content = "Zelda Personality Inventory home page">
	    <meta name = "keywords" content = "legend_of_zelda, personality, character, quiz">
	    <meta name="author" content="Mayo" >
		<link rel = "stylesheet" type = "text/css" href = "ZeldaQuiz.css">
	</head>
	<body>
		<a href = "ZeldaQuizHome.html" class = "headAnchor">
			<h1 id = "homeHead">
				Your Result
			</h1>
		</a>
		<?php
			// Variables to hold number of questions toward each result
			$linkk = 0;
			$navi = 0;
			$zelda = 0;
			$ganondorf = 0;
			$rauru = 0;
			$saria = 0;
			$darunia = 0;
			$ruto = 0;
			$impa = 0;
			$nabooru = 0;
			// Check if all radio buttons are checked, if not, reroute the user back to the quiz form
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["question1"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest1 = $_POST["question1"];
				}
				if (empty($_POST["question2"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest2 = $_POST["question2"];
				}
				if (empty($_POST["question3"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest3 = $_POST["question3"];
				}
				if (empty($_POST["question4"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest4 = $_POST["question4"];
				}
				if (empty($_POST["question5"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest5 = $_POST["question5"];
				}
				if (empty($_POST["question6"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest6 = $_POST["question6"];
				}
				if (empty($_POST["question7"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest7 = $_POST["question7"];
				}
				if (empty($_POST["question8"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest8 = $_POST["question8"];
				}
				if (empty($_POST["question9"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest9 = $_POST["question9"];
				}
				if (empty($_POST["question10"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest10 = $_POST["question10"];
				}
				if (empty($_POST["question11"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest11 = $_POST["question11"];
				}
				if (empty($_POST["question12"])) {
					header("location: http://webdev.cs.uwosh.edu/students/mayoj72/CS346Project/ZeldaQuizForm.php");
				} else {
					$quest12 = $_POST["question12"];
				}
			}
			// Condition statements to determine the question-values of the globals
			// Question #1--------------------------
			if ($quest1 == "link")
			{
				$linkk += 1;
			}
			else if ($quest1 == "navi")
			{
				$navi += 1;
			}
			else if ($quest1 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest1 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest1 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest1 == "saria")
			{
				$saria += 1;
			}
			else if ($quest1 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest1 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest1 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest1 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #2--------------------------
			if ($quest2 == "link")
			{
				$linkk += 1;
			}
			else if ($quest2 == "navi")
			{
				$navi += 1;
			}
			else if ($quest2 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest2 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest2 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest2 == "saria")
			{
				$saria += 1;
			}
			else if ($quest2 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest2 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest2 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest2 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #3--------------------------
			if ($quest3 == "link")
			{
				$linkk += 1;
			}
			else if ($quest3 == "navi")
			{
				$navi += 1;
			}
			else if ($quest3 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest3 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest3 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest3 == "saria")
			{
				$saria += 1;
			}
			else if ($quest3 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest3 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest3 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest3 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #4--------------------------
			if ($quest4 == "link")
			{
				$linkk += 1;
			}
			else if ($quest4 == "navi")
			{
				$navi += 1;
			}
			else if ($quest4 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest4 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest4 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest4 == "saria")
			{
				$saria += 1;
			}
			else if ($quest4 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest4 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest4 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest4 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #5--------------------------
			if ($quest5 == "link")
			{
				$linkk += 1;
			}
			else if ($quest5 == "navi")
			{
				$navi += 1;
			}
			else if ($quest5 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest5 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest5 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest5 == "saria")
			{
				$saria += 1;
			}
			else if ($quest5 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest5 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest5 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest5 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #6--------------------------
			if ($quest6 == "link")
			{
				$linkk += 1;
			}
			else if ($quest6 == "navi")
			{
				$navi += 1;
			}
			else if ($quest6 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest6 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest6 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest6 == "saria")
			{
				$saria += 1;
			}
			else if ($quest6 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest6 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest6 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest6 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #7--------------------------
			if ($quest7 == "link")
			{
				$linkk += 1;
			}
			else if ($quest7 == "navi")
			{
				$navi += 1;
			}
			else if ($quest7 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest7 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest7 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest7 == "saria")
			{
				$saria += 1;
			}
			else if ($quest7 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest7 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest7 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest7 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #8--------------------------
			if ($quest8 == "link")
			{
				$linkk += 1;
			}
			else if ($quest8 == "navi")
			{
				$navi += 1;
			}
			else if ($quest8 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest8 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest8 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest8 == "saria")
			{
				$saria += 1;
			}
			else if ($quest8 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest8 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest8 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest8 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #9--------------------------
			if ($quest9 == "link")
			{
				$linkk += 1;
			}
			else if ($quest9 == "navi")
			{
				$navi += 1;
			}
			else if ($quest9 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest9 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest9 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest9 == "saria")
			{
				$saria += 1;
			}
			else if ($quest9 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest9 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest9 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest9 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #10--------------------------
			if ($quest10 == "link")
			{
				$linkk += 1;
			}
			else if ($quest10 == "navi")
			{
				$navi += 1;
			}
			else if ($quest10 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest10 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest10 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest10 == "saria")
			{
				$saria += 1;
			}
			else if ($quest10 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest10 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest10 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest10 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #11--------------------------
			if ($quest11 == "link")
			{
				$linkk += 1;
			}
			else if ($quest11 == "navi")
			{
				$navi += 1;
			}
			else if ($quest11 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest11 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest11 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest11 == "saria")
			{
				$saria += 1;
			}
			else if ($quest11 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest11 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest11 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest11 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Question #12--------------------------
			if ($quest12 == "link")
			{
				$linkk += 1;
			}
			else if ($quest12 == "navi")
			{
				$navi += 1;
			}
			else if ($quest12 == "zelda")
			{
				$zelda += 1;
			}
			else if ($quest12 == "ganondorf")
			{
				$ganondorf += 1;
			}
			else if ($quest12 == "rauru")
			{
				$rauru += 1;
			}
			else if ($quest12 == "saria")
			{
				$saria += 1;
			}
			else if ($quest12 == "darunia")
			{
				$darunia += 1;
			}
			else if ($quest12 == "ruto")
			{
				$ruto += 1;
			}
			else if ($quest12 ==  "impa")
			{
				$impa += 1;
			}
			else if ($quest12 ==  "nabooru")
			{
				$nabooru += 1;
			}
			// Determine which result will display, based on the greatest number of answers
			$greatest = 0;
			$results = array();
			$results[0] = $linkk;
			$results[1] = $navi;
			$results[2] = $zelda;
			$results[3] = $ganondorf;
			$results[4] = $rauru;
			$results[5] = $saria;
			$results[6] = $darunia;
			$results[7] = $ruto;
			$results[8] = $impa;
			$results[9] = $nabooru;
			// Array index of the result with the highest number
			$greatest = 0;
			for ($i = 0; $i < count($results); $i++)
			{
				if ($results[$i] > $results[$greatest])
				{
					$greatest = $i;
				}
			}
			// Determine the html page to embed and database update name
			$greatestName = "";
			switch($greatest)
			{
				case 0:
					$greatestName = "Link";
				?>
					<embed src = "LinkEmbed.html">
				<?php
					break;
				case 1:
					$greatestName = "Navi";
				?>
					<embed src = "NaviEmbed.html">
				<?php
					break;
				case 2:
					$greatestName = "Zelda";
				?>
					<embed src = "ZeldaEmbed.html">
				<?php
					break;
				case 3:
					$greatestName = "Ganondorf";
				?>
					<embed src = "GanondorfEmbed.html">
				<?php
					break;
				case 4:
					$greatestName = "Rauru";
				?>
					<embed src = "RauruEmbed.html">
				<?php
					break;
				case 5:
					$greatestName = "Saria";
				?>
					<embed src = "SariaEmbed.html">
				<?php
					break;
				case 6:
					$greatestName = "Darunia";
				?>
					<embed src = "DaruniaEmbed.html">
				<?php
					break;
				case 7:
					$greatestName = "Ruto";
				?>
					<embed src = "RutoEmbed.html">
				<?php
					break;
				case 8:
					$greatestName = "Impa";
				?>
					<embed src = "ImpaEmbed.html">
				<?php
					break;
				case 9:
					$greatestName = "Nabooru";
				?>
					<embed src = "NabooruEmbed.html">
				<?php
					break;
			}
			// Insert result into the database, get statistics, etc.
			$db = new PDO("mysql:dbname=mayoj72;host=localhost", "mayoj72", "Rin6Toesock4");
			$updateQuery = "UPDATE `ZeldaQuiz` SET `NumResults` = `NumResults` + 1 WHERE `CharName` = '$greatestName'";
			$charResultQuery = "SELECT `NumResults` FROM `ZeldaQuiz` WHERE `CharName` = '$greatestName'";
			$sumQuery = "SELECT SUM(`NumResults`) FROM `ZeldaQuiz`";
			// If all the radio buttons are checked, increment the result by one, otherwise do nothing
			if (empty($_POST["question1"]) || empty($_POST["question2"]) ||
			    empty($_POST["question3"]) || empty($_POST["question4"]) ||
				empty($_POST["question5"]) || empty($_POST["question6"]) ||
				empty($_POST["question7"]) || empty($_POST["question8"]) ||
			    empty($_POST["question9"]) || empty($_POST["question10"]) ||
				empty($_POST["question11"]) || empty($_POST["question12"])) {	
			} else {
				$update = $db->query($updateQuery);
			}
			$resultChar = $db->query($charResultQuery);
			$resultSum = $db->query($sumQuery);
			// Make the SQL results "usable"
			foreach ($resultChar as $rows)
			{
				$usableChar = $rows;
			}
			foreach ($resultSum as $rows)
			{
				$usableSum = $rows;
			}
			$percentage = round(($usableChar[0] / $usableSum[0]) * 100, 2);
		?>
		<br />
		<div class = "stats">
			You got <?= $greatestName ?>! So far, the number of times 
			this result has occurred is <?= $usableChar[0] ?>.
			<br />
			<?= $percentage ?>% of participants got this result.
			<br />
			Number of questions you answered toward each result:
		</div>
		<!-- Diplay number of answers for each question in unordered list -->
		<ul class = "stats">
			<li> Link <?= ": ".$linkk ?> </li>
			<li> Navi <?= ": ".$navi ?> </li>
			<li> Zelda <?= ": ".$zelda ?> </li>
			<li> Ganondorf <?= ": ".$ganondorf ?> </li>
			<li> Rauru <?= ": ".$rauru ?> </li>
			<li> Saria <?= ": ".$saria ?> </li>
			<li> Darunia <?= ": ".$darunia ?> </li>
			<li> Ruto <?= ": ".$ruto ?> </li>
			<li> Impa <?= ": ".$impa ?> </li>
			<li> Nabooru <?= ": ".$nabooru ?> </li>
		</ul>
		<br />
		<br />
		<form action = "ZeldaQuizForm.php">
			<button class = "butt"> Take it again! </button>
		</form>
		<br />
		<br />
		<a href = "ZeldaQuizHome.html"> Home </a>
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
<?php unset($_SESSION); ?>